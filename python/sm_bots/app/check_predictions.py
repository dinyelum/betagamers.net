from sm_bots.domain.services import PredictionStatusEvaluator


class CheckPredictions:

    def __init__(self, file_repo, telegram, channels):
        self.file_repo = file_repo
        self.telegram = telegram
        self.channels = channels

    async def execute(self, lang, unreplied_map):

        sections = self.file_repo.load_sections("yesterday", lang)
        updates = []

        for section in sections:

            if section.section_id not in unreplied_map.get(lang, {}):
                continue

            matches = section.matches

            if PredictionStatusEvaluator.should_skip(matches):
                continue

            if PredictionStatusEvaluator.has_win(matches) and not PredictionStatusEvaluator.has_loss(matches):

                await self.telegram.reply(
                    self.channels[lang],
                    unreplied_map[lang][section.section_id]
                )

            updates.append((lang, section.section_id))

        return updates
