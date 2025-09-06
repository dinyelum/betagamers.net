import requests
import mysql.connector
import config
import sys


def update_countries():
    url = "https://fbrapi.com/countries"
    headers = {"X-API-Key": config.FBREF_API_KEY}

    try:
        response = requests.get(url, headers=headers, timeout=120)
        fbrefdata = response.json()
        retry = 0
            while response.status_code == 500 and retry <= 20:
                time.sleep(900)
                try:
                    response = requests.get(url, headers=headers, timeout=120)
                except requests.exceptions.RequestException as rError:
                    print(f"Request Error: {rError}")
            if retry > 20:
                print(f"FBREF Countries: FBref returned a 500 error in over 20 consecutive retries at 15-minute intervals, totaling 5 hours of attempts. No further retries will be made.")
                sys.exit()
    except requests.exceptions.RequestException as rError:
        print(f"Request Error: {rError}")

    if response.status_code == 200:
        dbdata = [(item['country'], item['country_code'], item['#_clubs'])
                  for item in fbrefdata['data']]
    
        with mysql.connector.connect(host=config.DB_HOST, user=config.DB_USER, password=config.DB_PASS, database=config.DB_NAME) as conn:
            try:
                mydb_cursor = conn.cursor()
                mydb_cursor.executemany(
                    "insert ignore into fbref_countries (country, iso3, clubs) values (%s, %s, %s)", dbdata)
                conn.commit()
                print("Successful")
            except mysql.connector.Error as e:
                print(f"MySql Error: {e}")
    else:
        print(f"API returned error: {response_json['message']}")
        break
