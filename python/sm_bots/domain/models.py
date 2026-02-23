"""
Pure business objects.
"""
from dataclasses import dataclass
from typing import List


@dataclass
class Match:
    league: str
    fixture: str
    tip: str
    status: int


@dataclass
class PredictionSection:
    section_id: str
    matches: List[Match]
