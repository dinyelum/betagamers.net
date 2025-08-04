import requests
import mysql.connector
import sys
import time
import json
from pathlib import Path
import config

file_path = Path("my_file.txt")
print(file_path)
sys.exit()

with mysql.connector.connect(host=config.DB_HOST, user=config.DB_USER, password=config.DB_PASS, database=config.DB_NAME) as conn:
    try:
        cursor = conn.cursor()
        cursor.execute(
            "select fl.fbref_leagueid, fl.league, fc.country from fbref_leagues as fl join fbref_countries as fc on fl.iso3=fc.iso3")
        dbdata = cursor.fetchall()
        print("Successful")
    except mysql.connector.Error as e:
        print(f"MySql Error: {e}")
count = 0
league_no_data = []
# dbdata = [
#     # (21, 'Liga Profesional de Fútbol Argentina', 'Argentina'),
#     (296, 'Belgian Pro League', 'Belgium')
# ]
for league_details in dbdata:
    url = 'https://fbrapi.com/league-standings'
    params = {'league_id': league_details[0]}
    headers = {"X-API-Key": config.FBREF_API_KEY}

    try:
        response = requests.get(url=url, params=params,
                                headers=headers, timeout=120)
        response_json = response.json()
        if response.status_code == 200:
            leaguedata = [{'rk': subitem['rk'],
                           'team_name': subitem['team_name'],
                           'team_id': subitem['team_id'],
                           'mp': subitem['mp'],
                           'w': subitem['w'],
                           'd': subitem['d'],
                           'l': subitem['l'],
                           'gf': subitem['gf'],
                           'ga': subitem['ga'],
                           'gd': subitem['gd'].replace('+', ''),
                           'pts': subitem['pts']} for item in response_json['data'] for subitem in item['standings']]
            leaguejson = json.dumps(leaguedata, indent=4)
            pathdir = f"{config.BG_FBREF_RANKS_URL}/{league_details[2].replace(' ', '_').lower()}-{league_details[1].replace(' ', '_').lower()}.json"
            Path(pathdir).write_text(leaguejson)
        elif response.status_code == 500:
            league_no_data.append(league_details[0])
        else:
            print(f"API returned error: {response_json['message']}")
            break
    except requests.exceptions.RequestException as rError:
        print(f"Request Error: {rError}")
    time.sleep(15)
    count += 1
    print(f"Wake Up: {count}")

if len(league_no_data):
    # print(f"League Ranks Updated Successfully except League IDs: {', '.join(league_no_data)}")
    file_path = Path("league_ranks_exceptions.txt")

    with file_path.open("a") as f:
        f.write(
            f"League Ranks Updated Successfully except League IDs: {', '.join(league_no_data)}.\n")
else:
    print("League Ranks Updated Successfully")
