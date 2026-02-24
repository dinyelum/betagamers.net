from common.base_config import *
from urllib.parse import quote_plus
import mysql.connector

TOKEN = os.getenv("TELEGRAM_BOT_TOKEN")

DB_NAME = os.getenv("DB_NAME")
DB_USER = os.getenv("DB_USER")
DB_PASS = os.getenv("DB_PASS")
DB_HOST = os.getenv("DB_HOST")
if IS_DEV:
    DB_HOST = "127.0.0.1"


def connector_factory():
    return mysql.connector.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASS,
        database=DB_NAME,
        connection_timeout=5,
        use_pure=True
    )
