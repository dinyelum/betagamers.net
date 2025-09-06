#!/usr/bin/python3
import time
import requests
import mysql.connector
import config
import countries

countries.update_countries()
time.sleep(10)
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
        retry = 0
        while response.status_code == 500 and retry <= 20:
            time.sleep(900)
            try:
                response = requests.get(url=url, params=params,
                                        headers=headers, timeout=120)
            except requests.exceptions.RequestException as rError:
                print(f"Request Error: {rError}")
        if retry > 20:
            print(f"FBref returned a 500 error in over 20 consecutive retries at 15-minute intervals, totaling 5 hours of attempts. No further retries will be made.")
            break
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
            insert_query = """
                Insert into fbref_leagues (league, fbref_leagueid, gender, tier, iso3, first_season, last_season) values (%s, %s, %s, %s, %s, %s, %s)
                ON DUPLICATE KEY UPDATE
                league = VALUES(league),
                gender = VALUES(gender),
                tier = VALUES(tier),
                iso3 = VALUES(iso3),
                first_season = VALUES(first_season),
                last_season = VALUES(last_season)
            """
            if len(leaguedata) > 1:
                cursor.executemany(insert_query, leaguedata)
            else:
                cursor.execute(insert_query, leaguedata)
            conn.commit()
            print('Successful')
        except mysql.connector.Error as e:
            print(f"MySql Error: {e}")
