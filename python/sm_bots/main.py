import asyncio
from pathlib import Path
from .infrastructure.telegram_client import TelegramClient
from .infrastructure.file_repository import PredictionFileRepository
from .infrastructure.message_repository import MessageRepository
from .app.post_predictions import PostPredictions
from .app.check_predictions import CheckPredictions
from .app.orchestrator import BotOrchestrator
from my_shared_utils.database.transaction_manager import DatabaseTransactionManager
from . import config


CHANNELS = {
    "en": "@betagamers_en",
    "fr": "@betagamers_fr"
}


async def main():

    telegram = TelegramClient(config.TOKEN)
    file_repo = PredictionFileRepository(Path(config.BG_INCS))
    dtm = DatabaseTransactionManager(config=config, table='message_ids')
    message_repo = MessageRepository(dtm)

    post_uc = PostPredictions(
        file_repo,
        message_repo,
        telegram,
        CHANNELS
    )

    check_uc = CheckPredictions(
        file_repo,
        telegram,
        CHANNELS
    )

    orchestrator = BotOrchestrator(
        post_uc,
        check_uc,
        message_repo
    )

    await orchestrator.run(CHANNELS)


if __name__ == "__main__":
    asyncio.run(main())
