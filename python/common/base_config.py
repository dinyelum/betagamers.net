import os
from pathlib import Path
from dotenv import load_dotenv

# Load base .env
load_dotenv()

# Optional: load env from custom path
ENV_PATH = os.getenv("ENV_PATH")
if ENV_PATH:
    load_dotenv(dotenv_path=Path(ENV_PATH))

APP_ENV = os.getenv("APP_ENV", "production")

IS_DEV = APP_ENV == "development"
IS_PROD = APP_ENV == "production"

# Shared root path
PY_DIR = Path(__file__).resolve().parents[1]  # root/to/python folder
BG_ROOT = Path.home()
if IS_DEV:
    BG_ROOT = Path(f"C:/xampp/htdocs")
BG_INCS = Path(f"{BG_ROOT}/app/betagamers/incs")
BG_DOMAINS = {
    'en': 'https://betagamers.net',
    'fr': 'https://fr.betagamers.net',
    'es': 'https://es.betagamers.net',
    'pt': 'https://pt.betagamers.net',
    'de': 'https://de.betagamers.net'
}


def controller_translations(controller):
    list = {
        'free_predictions': {'en': 'free_predictions', 'fr': 'pronostics_gratuits', 'es': 'pronosticosgratis', 'pt': 'dicas_gratis', 'de': 'kostenlos_prognose'}
    }
    return list if controller == 'all' else list[controller]
