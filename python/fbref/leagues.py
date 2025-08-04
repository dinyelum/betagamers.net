#!/usr/bin/python3
import time
import requests
import mysql.connector
import config

with mysql.connector.connect(host=config.DB_HOST, user=config.DB_USER, password=config.DB_PASS, database=config.DB_NAME) as conn:
    try:
        cursor = conn.cursor()
        cursor.execute(
            "select iso3 from fbref_countries")
        dbdata = cursor.fetchall()
        print("Successful")
    except mysql.connector.Error as e:
        print(f"MySql Error: {e}")
count = 0
leaguedata = []
for country in dbdata:
    url = 'https://fbrapi.com/leagues'
    params = {'country_code': country[0]}
    headers = {"X-API-Key": config.FBREF_API_KEY}

    try:
        response = requests.get(url=url, params=params,
                                headers=headers, timeout=120)
        response_json = response.json()
        if response.status_code == 200:
            leaguedata.extend(
                [(subitem['competition_name'],
                  subitem['league_id'],
                  subitem['gender'],
                  subitem['tier'],
                  country[0],
                  subitem['first_season'],
                  subitem['last_season']) for item in response_json['data'] for subitem in item['leagues'] if item['league_type'] == 'domestic_leagues']
            )
        else:
            print(f"API returned error: {response_json['message']}")
            break
    except requests.exceptions.RequestException as rError:
        print(f"Request Error: {rError}")
    time.sleep(15)
    count += 1
    print(f"Wake Up: {count}")

    # print(leaguedata)
    # sys.exit()
if len(leaguedata):
    with mysql.connector.connect(host=config.DB_HOST, user=config.DB_USER, password=config.DB_PASS, database=config.DB_NAME) as conn:
        try:
            cursor = conn.cursor()
            if len(leaguedata) > 1:
                cursor.executemany(
                    "Insert into fbref_leagues (league, fbref_leagueid, gender, tier, country, first_season, last_season) values (%s, %s, %s, %s, %s, %s, %s)", leaguedata)
            else:
                cursor.execute(
                    "Insert into fbref_leagues (league, fbref_leagueid, gender, tier, country, first_season, last_season) values (%s, %s, %s, %s, %s, %s, %s)", leaguedata)
            conn.commit()
            print('Successful')
        except mysql.connector.Error as e:
            print(f"MySql Error: {e}")
