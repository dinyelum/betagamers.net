import asyncio
from datetime import date, timedelta


class BotOrchestrator:

    def __init__(self, post_games, check_games, message_repo):
        self.post_games = post_games
        self.check_games = check_games
        self.message_repo = message_repo

    async def run(self, channels):

        yesterday = date.today() - timedelta(days=1)
        today = date.today()

        unreplied_map = self.message_repo.get_unreplied(yesterday)
        already_posted = self.message_repo.get_unreplied(today)

        all_new = []
        all_updates = []

        for lang in channels:

            updates = await self.check_games.execute(lang, unreplied_map)
            new_records = await self.post_games.execute(
                lang,
                yesterday,
                already_posted
            )

            all_updates.extend(updates)
            all_new.extend(new_records)

            await asyncio.sleep(65)

        self.message_repo.mark_replied(yesterday, all_updates)
        self.message_repo.save_new_messages(all_new)
