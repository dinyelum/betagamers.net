from . import config
from datetime import date
from pathlib import Path
from telegram import Bot
import asyncio
import json
import os
import sys

"""
Workflow:
Check yesterday's games
Post today's games
"""


class TelegramBot:
    CHANNELS = {
        'en': "@betagamers_en",
        'fr': "@betagamers_fr"
    }
    bot = Bot(token=config.TOKEN)

    def get_telegram_files(self, dir: Path):
        files = []
        if dir.exists():
            with os.scandir(dir) as entries:
                for entry in entries:
                    if (
                        entry.is_file()
                        and entry.name.startswith("telegram")
                        and entry.name.endswith(".php")
                    ):
                        files.append(entry.path)
        return files

    async def post_predictions(self, source):
        message_ids = []
        post = ''
        table_dir = Path(f"{config.BG_INCS}/table/today/{source}")
        today_files = self.get_telegram_files(table_dir)
        for file in today_files:
            matches = []

            with open(file, "r") as f:
                fixtures = json.load(f)
            if 'telegram_message_id' in fixtures['meta']:
                continue
            if len(fixtures['data']) < 1:
                continue
            for match in fixtures['data']:
                matches.append(
                    f"{match['league']}\n{match['fixture']}\n{match['tip']}")

            # Telegram message limit = 4096 characters.
            post = '\n\n'.join(matches)
            response = await self.post_content(self.CHANNELS[source], post)
            fixtures['meta']['telegram_message_id'] = response.message_id
            with open(file, "w") as f:
                json.dump(fixtures, f)
            message_ids.append(response.message_id)
            # message_ids.append(response['message_id'])
            # print(file)
            # return len(message_ids) > 0

    async def check_predictions(self, source):
        no_status = None
        post = ''
        table_dir = Path(f"{config.BG_INCS}/table/yesterday/{source}")
        yesterday_files = self.get_telegram_files(table_dir)
        for file in yesterday_files:
            statuses = []
            with open(file, "r") as f:
                fixtures = json.load(f)
            if 'telegram_message_id' not in fixtures['meta']:
                continue

            if len(fixtures['data']) < 1:
                continue

            for match in fixtures['data']:
                if match['status'] == 0:
                    break
                statuses.append(match['status'])
            no_status = all(status == '' for status in statuses)
            if len(statuses) and no_status == True:
                continue
            if 1 in statuses:
                await self.reply_post(
                    self.CHANNELS[source], fixtures['meta']['telegram_message_id'])
            del fixtures['meta']['telegram_message_id']
            with open(file, 'w') as f:
                json.dump(fixtures, f)
            # print(file)
            # if no_status == False:
            #     return True

    async def post(self):
        for lang in self.CHANNELS:
            await self.check_predictions(lang)
            await self.post_predictions(lang)
            await asyncio.sleep(65)

        """
        implement asyncio.gather() for efficiency (languages are independent) and asyncio.sleep() for rate limiting
        """

    async def post_content(self, channel, post):
        return await self.bot.send_message(chat_id=channel, text=post)

    async def reply_post(self, channel, message_id):
        await self.bot.send_message(
            chat_id=channel,
            text="✅",
            reply_to_message_id=message_id  # original message_id
        )


if __name__ == "__main__":
    bot_class = TelegramBot()

    asyncio.run(bot_class.post())


# Post every day at 9am
# scheduler.add_job(post_message, 'cron', hour=9, minute=0)

# scheduler.start()
