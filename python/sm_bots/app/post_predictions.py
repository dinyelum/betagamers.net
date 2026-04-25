from datetime import datetime, timedelta, date
from sm_bots.domain.services import PredictionFormatter
import sys


class PostPredictions:

    def __init__(self, file_repo, message_repo, telegram, channels):
        self.file_repo = file_repo
        self.message_repo = message_repo
        self.telegram = telegram
        self.channels = channels
        self.weekday = date.today().weekday()

    async def execute(self, lang, date, unreplied_map):

        sections = self.file_repo.load_sections("today", lang)
        new_records = []

        for section in sections:

            if section.section_id in unreplied_map.get(lang, {}):
                continue

            if not section.matches:
                continue

            text = PredictionFormatter.format(section.matches)

            response = await self.telegram.send_message(
                self.channels[lang],
                text
            )

            new_records.append(
                (section.section_id, lang, response.message_id)
            )

        if not len(new_records) and self.weekday in (1, 4):
            return await self.post_featured_instead(lang, date, unreplied_map)
        return new_records

    async def post_featured_instead(self, lang, date, unreplied_map):

        sections = self.file_repo.load_featured(lang)
        new_records = []

        for section in sections:

            if section.section_id in unreplied_map.get(lang, {}):
                continue

            if not section.link:
                continue

            response = await self.telegram.send_message(
                self.channels[lang],
                section.link
            )

            new_records.append(
                (section.section_id, lang, response.message_id)
            )

        return new_records
