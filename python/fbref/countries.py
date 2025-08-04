import requests
import mysql.connector
import config
import sys

url = "https://fbrapi.com/countries"
headers = {"X-API-Key": config.FBREF_API_KEY}

response = requests.get(url, headers=headers, timeout=120)
fbrefdata = response.json()

dbdata = [(item['country'], item['country_code'], item['#_clubs'])
          for item in fbrefdata['data']]

with mysql.connector.connect(host=config.DB_HOST, user=config.DB_USER, password=config.DB_PASS, database=config.DB_NAME) as conn:
    try:
        mydb_cursor = conn.cursor()
        mydb_cursor.executemany(
            "insert into fbref_countries (country, iso3, clubs) values (%s, %s, %s)", dbdata)
        conn.commit()
        print("Successful")
    except mysql.connector.Error as e:
        print(f"MySql Error: {e}")
