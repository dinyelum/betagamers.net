"""
Business rules only.
"""


class PredictionFormatter:

    @staticmethod
    def format(matches):
        return "\n\n".join(
            f"{m.league}\n{m.fixture}\n{m.tip}"
            for m in matches
        )


class PredictionStatusEvaluator:

    @staticmethod
    def should_skip(matches):
        if not matches:
            return True

        statuses = [m.status for m in matches]

        # # unfinished match
        # if 0 in statuses:
        #     return True

        # no actual status
        if all(status == "" for status in statuses):
            return True

        return False

    @staticmethod
    def has_win(matches):
        return any(str(m.status) == '1' for m in matches)

    @staticmethod
    def has_loss(matches):
        return any(str(m.status) == '0' for m in matches)
