from telegram import Bot


class TelegramClient:

    def __init__(self, token: str):
        self.bot = Bot(token=token)

    async def send_message(self, channel: str, text: str):
        return await self.bot.send_message(chat_id=channel, text=text)

    async def reply(self, channel: str, message_id: int, text="✅"):
        await self.bot.send_message(
            chat_id=channel,
            text=text,
            reply_to_message_id=message_id
        )
