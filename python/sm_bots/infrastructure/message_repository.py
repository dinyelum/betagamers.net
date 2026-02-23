from my_shared_utils.database.transaction_manager import DatabaseTransactionManager


class MessageRepository:

    def __init__(self, dtm_factory):
        self.dtm_factory = dtm_factory

    def get_unreplied(self, date):

        with self.dtm_factory as dtm:
            rows = dtm.select(
                "lang, section, message_id"
            ).where(
                f"date='{date}' and status=0"
            )

        result = {}
        for lang, section, message_id in rows:
            result.setdefault(lang, {})[section] = message_id

        return result

    def mark_replied(self, date, updates):

        if not updates:
            return

        conditions = ") OR (".join(
            f"lang='{lang}' AND section='{section}'"
            for lang, section in updates
        )

        with self.dtm_factory as dtm:
            dtm.update({"status": 1}).where(
                f"date='{date}' AND (({conditions}))"
            )

    def save_new_messages(self, records):
        if not records:
            return

        with self.dtm_factory as dtm:
            dtm.insert(records, ("section", "lang", "message_id"))
