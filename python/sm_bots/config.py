from common.base_config import *
from urllib.parse import quote_plus

TOKEN = os.getenv("TELEGRAM_BOT_TOKEN")

if IS_DEV:
    DB_NAME = os.getenv("DB_NAME")
    DB_USER = os.getenv("DB_USER")
    DB_PASS = os.getenv("DB_PASS")
    DB_HOST = os.getenv("DB_HOST")
if IS_PROD:
    DB_NAME = os.getenv("BG_NAME")
    DB_USER = os.getenv("BG_USER")
    DB_PASS = os.getenv("BG_PASS")
    DB_HOST = os.getenv("BG_HOST")


# DB_NAME = os.getenv("BG_NAME")
# DB_USER = os.getenv("BG_USER")
# DB_PASS = os.getenv("BG_PASS")
# DB_PASS_ESCAPED = quote_plus(DB_PASS)
# DB_HOST = '127.0.0.1'
# BG_HOST = os.getenv("BG_HOST")
# DB_PORT = os.getenv("LOCAL_TO_REMOTE_PORT")
# CPANEL_USER = os.getenv("CPANEL_USER")
