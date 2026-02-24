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

        # no actual status
        if all(status == "" for status in statuses):
            return True

        return False

    @staticmethod
    def has_win(matches):
        return any(int(m.status) == 1 for m in matches)
