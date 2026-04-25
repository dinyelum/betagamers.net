"""
Handles filesystem only.
"""
from sm_bots import config as c
import json
from itertools import islice
from pathlib import Path
from sm_bots.domain.models import Match, PredictionSection, FeaturedSection


class PredictionFileRepository:

    def __init__(self, base_path: Path):
        self.base_path = base_path

    def load_sections(self, day: str, lang: str):

        directory = self.base_path / "table" / day / lang
        if not directory.exists():
            return []

        files = [
            f for f in directory.iterdir()
            if f.name.startswith("telegram") and f.suffix == ".php"
        ]

        sections = []

        for file in files:
            with open(file) as f:
                raw = json.load(f)

            matches = [
                Match(
                    league=m["league"],
                    fixture=m["fixture"],
                    tip=m["tip"],
                    status=m.get("status", "")
                )
                for m in raw.get("data", [])
            ]

            sections.append(
                PredictionSection(
                    section_id=file.stem,
                    matches=matches
                )
            )

        return sections

    def load_featured(self, lang: str):

        file = self.base_path / "free_predicts/stats/featured.php"
        if not file.exists():
            return []

        sections = []
        with open(file) as f:
            raw = json.load(f)
            for i, key in islice(enumerate(raw.keys()), 3):
                sections.append(
                    FeaturedSection(
                        section_id=f"featured{i+1}",
                        link=f"{c.BG_DOMAINS[lang]}/{c.controller_translations('free_predictions')[lang]}/{key}"
                    )
                )

        return sections
