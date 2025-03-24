<?php
0:"UEFA"
1:"CAF"
2:"OFC"
3:"CONMEBOL"
4:"CONCACAF"
5:"AFC"
$classics = json_decode($response);
$ovun = json_decode($response);
foreach($classics as $ind=>$val) {
    if($val['prediction'] = 'X') {
        /*if($ovun[$ind]['prediction'] == 'Over 2.5') {
            
        }*/
        $prediction = $ovun[$ind]['prediction'];
        if($ovun[$ind]['odds'][$prediction] >= 1.70) $val['prediction'] = str_replace('2.5', '3.5', $prediction);
    }
    $leagues[$val['competition_cluster']][][substr($val['start_date'], 0, 10)] = $val;
}
{
    "data": [
        {
            "home_team": "Hapoel Kfar Saba",
            "competition_name": "Liga Leumit",
            "away_team": "Kafr Qasim",
            "market": "classic",
            "competition_cluster": "Israel",
            "prediction": "12",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345418,
            "result": "",
            "start_date": "2025-03-17T17:00:00",
            "last_update_at": "2025-03-17T02:32:59.214657",
            "odds": {
                "1": 2.973,
                "X": 2.882,
                "2": 2.303,
                "1X": 1.507,
                "X2": 1.313,
                "12": 1.337
            }
        },
        {
            "home_team": "Entella",
            "competition_name": "Serie C",
            "away_team": "Sestri Levante",
            "market": "classic",
            "competition_cluster": "Italy",
            "prediction": "1",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345411,
            "result": "",
            "start_date": "2025-03-17T19:30:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.237,
                "X": 4.713,
                "2": 11.4,
                "1X": 1.023,
                "X2": 3.58,
                "12": 1.128
            }
        },
        {
            "home_team": "Castellon",
            "competition_name": "Segunda Division",
            "away_team": "Deportivo La Coruna",
            "market": "classic",
            "competition_cluster": "Spain",
            "prediction": "12",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345414,
            "result": "",
            "start_date": "2025-03-17T19:30:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 2.173,
                "X": 3.388,
                "2": 3.053,
                "1X": 1.338,
                "X2": 1.627,
                "12": 1.283
            }
        },
        {
            "home_team": "Arsenal Tula",
            "competition_name": "First League",
            "away_team": "Chayka Peschanokopskoye",
            "market": "classic",
            "competition_cluster": "Russia",
            "prediction": "1X",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345422,
            "result": "",
            "start_date": "2025-03-17T17:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 2.045,
                "X": 3.24,
                "2": 3.52,
                "1X": 1.265,
                "X2": 1.68,
                "12": 1.295
            }
        },
        {
            "home_team": "Maccabi Herzliya",
            "competition_name": "Liga Leumit",
            "away_team": "Hapoel Acre",
            "market": "classic",
            "competition_cluster": "Israel",
            "prediction": "12",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345420,
            "result": "",
            "start_date": "2025-03-17T17:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 2.122,
                "X": 3.25,
                "2": 2.997,
                "1X": 1.317,
                "X2": 1.607,
                "12": 1.263
            }
        },
        {
            "home_team": "Padova",
            "competition_name": "Serie C",
            "away_team": "Pergolettese",
            "market": "classic",
            "competition_cluster": "Italy",
            "prediction": "1",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345409,
            "result": "",
            "start_date": "2025-03-17T19:30:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.255,
                "X": 4.6,
                "2": 10.312,
                "1X": 1.033,
                "X2": 3.393,
                "12": 1.143
            }
        },
        {
            "home_team": "Potenza",
            "competition_name": "Serie C",
            "away_team": "Team Altamura",
            "market": "classic",
            "competition_cluster": "Italy",
            "prediction": "12",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345413,
            "result": "",
            "start_date": "2025-03-17T19:30:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 2.057,
                "X": 3.125,
                "2": 3.263,
                "1X": 1.273,
                "X2": 1.64,
                "12": 1.268
            }
        },
        {
            "home_team": "Lokomotiv Gorna Oryahovitsa",
            "competition_name": "Second PFL",
            "away_team": "Botev Plovdiv II",
            "market": "classic",
            "competition_cluster": "Bulgaria",
            "prediction": "1",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345417,
            "result": "",
            "start_date": "2025-03-17T15:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.633,
                "X": 3.59,
                "2": 4.693,
                "1X": 1.125,
                "X2": 2,
                "12": 1.225
            }
        },
        {
            "home_team": "Dobrudzha Dobrich",
            "competition_name": "Second PFL",
            "away_team": "Yantra Gabrovo",
            "market": "classic",
            "competition_cluster": "Bulgaria",
            "prediction": "1",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345416,
            "result": "",
            "start_date": "2025-03-17T13:30:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.37,
                "X": 4.12,
                "2": 7.125,
                "1X": 1.057,
                "X2": 2.687,
                "12": 1.16
            }
        },
        {
            "home_team": "Borac Banja Luka",
            "competition_name": "Premier League",
            "away_team": "Siroki Brijeg",
            "market": "classic",
            "competition_cluster": "Bosnia and Herzegovina",
            "prediction": "1",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345415,
            "result": "",
            "start_date": "2025-03-17T17:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.327,
                "X": 4.5,
                "2": 7.838,
                "1X": 1.057,
                "X2": 2.907,
                "12": 1.157
            }
        },
        {
            "home_team": "FK Novi Pazar",
            "competition_name": "SuperLiga",
            "away_team": "Zeleznicar Pancevo",
            "market": "classic",
            "competition_cluster": "Serbia",
            "prediction": "1X",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345423,
            "result": "",
            "start_date": "2025-03-17T18:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 1.94,
                "X": 3.318,
                "2": 3.543,
                "1X": 1.247,
                "X2": 1.75,
                "12": 1.27
            }
        },
        {
            "home_team": "Hapoel Rishon LeZion",
            "competition_name": "Liga Leumit",
            "away_team": "Hapoel Nof HaGalil",
            "market": "classic",
            "competition_cluster": "Israel",
            "prediction": "12",
            "status": "pending",
            "federation": "UEFA",
            "is_expired": false,
            "season": "2024 - 2025",
            "id": 345419,
            "result": "",
            "start_date": "2025-03-17T17:00:00",
            "last_update_at": "2025-03-17T06:32:39.556555",
            "odds": {
                "1": 2.092,
                "X": 3.22,
                "2": 3.105,
                "1X": 1.287,
                "X2": 1.64,
                "12": 1.277
            }
        }
    ]
}


Betminer
[
    {
        "id": 1216291,
        "date": "2025-03-15 12:30:00",
        "status": "FT",
        "home_goals": 1,
        "away_goals": 0,
        "homeID": 58,
        "homeTeam": "Millwall",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/58.png",
        "awayID": 75,
        "awayTeam": "Stoke City",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/75.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "Championship",
        "competition_full": "England Championship",
        "home_win": "60.00",
        "away_win": "20.00",
        "draw": "20.00",
        "both_teams_to_score": "70.00",
        "over15goals": "80.00",
        "over25goals": "45.00",
        "over35goals": "25.00"
    },
    {
        "id": 1216829,
        "date": "2025-03-15 12:30:00",
        "status": "FT",
        "home_goals": 0,
        "away_goals": 1,
        "homeID": 1370,
        "homeTeam": "Cambridge United",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/1370.png",
        "awayID": 1350,
        "awayTeam": "Peterborough",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1350.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "League One",
        "competition_full": "England League One",
        "home_win": "31.30",
        "away_win": "31.00",
        "draw": "37.70",
        "both_teams_to_score": "52.20",
        "over15goals": "61.80",
        "over25goals": "20.00",
        "over35goals": "15.00"
    },
    {
        "id": 1216828,
        "date": "2025-03-15 12:30:00",
        "status": "FT",
        "home_goals": 0,
        "away_goals": 1,
        "homeID": 68,
        "homeTeam": "Bolton",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/68.png",
        "awayID": 4686,
        "awayTeam": "Stockport County",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/4686.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "League One",
        "competition_full": "England League One",
        "home_win": "33.30",
        "away_win": "20.00",
        "draw": "46.70",
        "both_teams_to_score": "83.30",
        "over15goals": "95.00",
        "over25goals": "75.00",
        "over35goals": "55.00"
    },
    {
        "id": 1216295,
        "date": "2025-03-15 12:30:00",
        "status": "FT",
        "home_goals": 2,
        "away_goals": 2,
        "homeID": 72,
        "homeTeam": "QPR",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/72.png",
        "awayID": 63,
        "awayTeam": "Leeds",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/63.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "Championship",
        "competition_full": "England Championship",
        "home_win": "53.30",
        "away_win": "40.00",
        "draw": "6.70",
        "both_teams_to_score": "50.00",
        "over15goals": "80.00",
        "over25goals": "65.00",
        "over35goals": "30.00"
    },
    {
        "id": 1217384,
        "date": "2025-03-15 12:30:00",
        "status": "FT",
        "home_goals": 1,
        "away_goals": 1,
        "homeID": 1363,
        "homeTeam": "Crewe",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/1363.png",
        "awayID": 1354,
        "awayTeam": "Doncaster",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1354.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "League Two",
        "competition_full": "England League Two",
        "home_win": "33.30",
        "away_win": "46.70",
        "draw": "20.00",
        "both_teams_to_score": "60.00",
        "over15goals": "80.00",
        "over25goals": "50.00",
        "over35goals": "25.00"
    }
]

Betminer Upcoming
[
    {
        "id": 1338329,
        "date": "2025-03-18 00:00:00",
        "status": "NS",
        "home_goals": 0,
        "away_goals": 0,
        "homeID": 1151,
        "homeTeam": "Tecnico Universitario",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/1151.png",
        "awayID": 1152,
        "awayTeam": "Barcelona SC",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1152.png",
        "country": "Ecuador",
        "countryCode": "EC",
        "competition": "Liga Pro",
        "competition_full": "Ecuador Liga Pro",
        "home_win": "13.30",
        "away_win": "53.30",
        "1x2": "2X",
        "draw": "33.30",
        "both_teams_to_score": "66.70",
        "over15goals": "90.00",
        "over25goals": "65.00",
        "over35goals": "50.00",
        "correctscore": "1-2",
        "homeform": "DDWLD",
        "awayform": "LWWWW",
        "home_win_odds": "2.80",
        "away_win_odds": "2.45",
        "draw_odds": "3.25",
        "1x_odds": "1.53",
        "12_odds": "1.33",
        "2x_odds": "1.40",
        "bttshomeform": "",
        "bttsawayform": "",
        "btts_yes_odds": "1.80",
        "btts_no_odds": "1.91"
    },
    {
        "id": 1334426,
        "date": "2025-03-18 00:15:00",
        "status": "NS",
        "home_goals": 0,
        "away_goals": 0,
        "homeID": 455,
        "homeTeam": "Atletico Tucuman",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/455.png",
        "awayID": 438,
        "awayTeam": "Velez Sarsfield",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/438.png",
        "country": "Argentina",
        "countryCode": "AR",
        "competition": "Liga Profesional Argentina",
        "competition_full": "Argentina Liga Profesional Argentina",
        "home_win": "53.30",
        "away_win": "20.00",
        "1x2": "1X",
        "draw": "26.70",
        "both_teams_to_score": "33.30",
        "over15goals": "65.00",
        "over25goals": "40.00",
        "over35goals": "10.00",
        "correctscore": "2-0",
        "homeform": "LLWLW",
        "awayform": "DLLLL",
        "home_win_odds": "2.45",
        "away_win_odds": "3.20",
        "draw_odds": "3.00",
        "1x_odds": "1.36",
        "12_odds": "1.36",
        "2x_odds": "1.53",
        "bttshomeform": "",
        "bttsawayform": "",
        "btts_yes_odds": "2.05",
        "btts_no_odds": "1.70"
    },
    {
        "id": 1334425,
        "date": "2025-03-18 00:15:00",
        "status": "NS",
        "home_goals": 0,
        "away_goals": 0,
        "homeID": 461,
        "homeTeam": "San Martin S.J.",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/461.png",
        "awayID": 1064,
        "awayTeam": "Platense",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1064.png",
        "country": "Argentina",
        "countryCode": "AR",
        "competition": "Liga Profesional Argentina",
        "competition_full": "Argentina Liga Profesional Argentina",
        "home_win": "40.00",
        "away_win": "40.00",
        "1x2": "12",
        "draw": "20.00",
        "both_teams_to_score": "48.00",
        "over15goals": "40.00",
        "over25goals": "20.00",
        "over35goals": "13.30",
        "correctscore": "0-0",
        "homeform": "WLLDL",
        "awayform": "DLLWL",
        "home_win_odds": "2.88",
        "away_win_odds": "2.90",
        "draw_odds": "2.80",
        "1x_odds": "1.40",
        "12_odds": "1.40",
        "2x_odds": "1.40",
        "bttshomeform": "YNNNN",
        "bttsawayform": "YYNNN",
        "btts_yes_odds": "2.62",
        "btts_no_odds": "1.44"
    },
    {
        "id": 1349137,
        "date": "2025-03-18 17:45:00",
        "status": "NS",
        "home_goals": 0,
        "away_goals": 0,
        "homeID": 15224,
        "homeTeam": "Real Madrid W",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/15224.png",
        "awayID": 1850,
        "awayTeam": "Arsenal W",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1850.png",
        "country": "World",
        "countryCode": "",
        "competition": "UEFA Champions League Women",
        "competition_full": "UEFA Champions League Women",
        "home_win": "40.00",
        "away_win": "50.00",
        "1x2": "12",
        "draw": "10.00",
        "both_teams_to_score": "60.00",
        "over15goals": "73.30",
        "over25goals": "73.30",
        "over35goals": "73.30",
        "correctscore": "2-3",
        "homeform": "DWWWL",
        "awayform": "WWLWW",
        "home_win_odds": "3.00",
        "away_win_odds": "2.10",
        "draw_odds": "3.60",
        "1x_odds": "1.67",
        "12_odds": "1.28",
        "2x_odds": "1.36",
        "bttshomeform": "YYNYN",
        "bttsawayform": "YYNNN",
        "btts_yes_odds": "1.53",
        "btts_no_odds": "2.38"
    },
    {
        "id": 1216704,
        "date": "2025-03-18 19:45:00",
        "status": "NS",
        "home_goals": 0,
        "away_goals": 0,
        "homeID": 73,
        "homeTeam": "Rotherham",
        "homeLogo": "https:\/\/media.api-sports.io\/football\/teams\/73.png",
        "awayID": 1358,
        "awayTeam": "Wycombe",
        "awayLogo": "https:\/\/media.api-sports.io\/football\/teams\/1358.png",
        "country": "England",
        "countryCode": "GB-ENG",
        "competition": "League One",
        "competition_full": "England League One",
        "home_win": "13.30",
        "away_win": "42.30",
        "1x2": "2X",
        "draw": "44.30",
        "both_teams_to_score": "50.00",
        "over15goals": "43.30",
        "over25goals": "18.30",
        "over35goals": "0.00",
        "correctscore": "0-1",
        "homeform": "DWLLL",
        "awayform": "DLDDD",
        "home_win_odds": "3.00",
        "away_win_odds": "2.30",
        "draw_odds": "3.40",
        "1x_odds": "1.57",
        "12_odds": "1.30",
        "2x_odds": "1.36",
        "bttshomeform": "",
        "bttsawayform": "",
        "btts_yes_odds": "1.91",
        "btts_no_odds": "1.91"
    }
]


Array
(
    [over_25] => Array
        (
            [CONMEBOL] => Array
                (
                    [2025-03-18] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [home_team] => Temperley
                                    [home_strength] => 0.31833616298812
                                    [competition_name] => Primera Nacional
                                    [away_team] => Gimnasia Mendoza
                                    [away_strength] => 0.28462998102467
                                    [market] => over_25
                                    [competition_cluster] => Argentina
                                    [prediction] => no
                                    [status] => won
                                    [distance_between_teams] => 986
                                    [federation] => CONMEBOL
                                    [is_expired] => 1
                                    [stadium_capacity] => 22
                                    [season] => 2025
                                    [id] => 345479
                                    [result] => 0 - 2
                                    [field_length] => 102
                                    [start_date] => 2025-03-18T00:45:00
                                    [last_update_at] => 2025-03-17T18:32:16.861728
                                    [field_width] => 68
                                    [probabilities] => stdClass Object
                                        (
                                            [yes] => 0.295
                                            [no] => 0.705
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [yes] => 3.178
                                            [no] => 1.312
                                        )

                                )

                            [1] => stdClass Object
                                (
                                    [home_team] => Atletico Tucuman
                                    [home_strength] => 1.5868863893975
                                    [competition_name] => Liga Profesional
                                    [away_team] => Velez Sarsfield
                                    [away_strength] => 0.8599068434253
                                    [market] => over_25
                                    [competition_cluster] => Argentina
                                    [prediction] => no
                                    [status] => lost
                                    [distance_between_teams] => 84
                                    [federation] => CONMEBOL
                                    [is_expired] => 1
                                    [stadium_capacity] => 32
                                    [season] => 2025 - Apertura
                                    [id] => 345477
                                    [result] => 1 - 2
                                    [field_length] => 
                                    [start_date] => 2025-03-18T00:15:00
                                    [last_update_at] => 2025-03-17T22:32:01.650408
                                    [field_width] => 
                                    [probabilities] => stdClass Object
                                        (
                                            [yes] => 0.374
                                            [no] => 0.626
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [yes] => 2.635
                                            [no] => 1.437
                                        )

                                )

                        )

                )

        )

)

Array
(
    [classic] => Array
        (
            [UEFA] => Array
                (
                    [2025-03-18] => Array
                        (
                            [0] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => England
                                    [prediction] => 1
                                    [status] => pending
                                    [distance_between_teams] => 371
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 11
                                    [id] => 345461
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 100
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T10:32:06.868604
                                    [field_width] => 64
                                    [home_team] => Gateshead
                                    [home_strength] => 1.5018404907975
                                    [competition_name] => National League
                                    [away_team] => Braintree
                                    [away_strength] => 0.4619953800462
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.461
                                            [X] => 0.332
                                            [2] => 0.207
                                            [1X] => 0.793
                                            [X2] => 0.539
                                            [12] => 0.668
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 1.598
                                            [X] => 3.808
                                            [2] => 4.7
                                            [1X] => 1.152
                                            [X2] => 2.218
                                            [12] => 1.225
                                        )

                                )

                            [1] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => England
                                    [prediction] => 1
                                    [status] => pending
                                    [distance_between_teams] => 271
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 14
                                    [id] => 345462
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T10:32:06.868604
                                    [field_width] => 
                                    [home_team] => Halifax
                                    [home_strength] => 0.81363812475785
                                    [competition_name] => National League
                                    [away_team] => Dagenham and Redbridge
                                    [away_strength] => 0.96432015429122
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.437
                                            [X] => 0.333
                                            [2] => 0.23
                                            [1X] => 0.77
                                            [X2] => 0.563
                                            [12] => 0.667
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 1.69
                                            [X] => 3.678
                                            [2] => 4.408
                                            [1X] => 1.172
                                            [X2] => 2.052
                                            [12] => 1.247
                                        )

                                )

                            [2] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => England
                                    [prediction] => 1X
                                    [status] => pending
                                    [distance_between_teams] => 239
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 
                                    [id] => 345459
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T06:30:10.603414
                                    [field_width] => 
                                    [home_team] => Altrincham
                                    [home_strength] => 1.5565572615861
                                    [competition_name] => National League
                                    [away_team] => Wealdstone
                                    [away_strength] => 0.43096303663186
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.424
                                            [X] => 0.316
                                            [2] => 0.261
                                            [1X] => 0.739
                                            [X2] => 0.576
                                            [12] => 0.684
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 1.798
                                            [X] => 3.62
                                            [2] => 3.847
                                            [1X] => 1.215
                                            [X2] => 1.925
                                            [12] => 1.248
                                        )

                                )

                            [3] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => England
                                    [prediction] => 12
                                    [status] => pending
                                    [distance_between_teams] => 30
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 
                                    [id] => 345463
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T10:32:06.868604
                                    [field_width] => 
                                    [home_team] => Maidenhead United
                                    [home_strength] => 1.9538710151315
                                    [competition_name] => National League
                                    [away_team] => Aldershot
                                    [away_strength] => 1.2526435659671
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.418
                                            [X] => 0.279
                                            [2] => 0.303
                                            [1X] => 0.697
                                            [X2] => 0.582
                                            [12] => 0.721
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 2.817
                                            [X] => 3.357
                                            [2] => 2.243
                                            [1X] => 1.547
                                            [X2] => 1.368
                                            [12] => 1.283
                                        )

                                )

                            [4] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => Northern Ireland
                                    [prediction] => 12
                                    [status] => pending
                                    [distance_between_teams] => 77
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 13
                                    [id] => 345466
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T10:32:06.868604
                                    [field_width] => 
                                    [home_team] => Coleraine
                                    [home_strength] => 0.78348651499171
                                    [competition_name] => NIFL Premiership
                                    [away_team] => Cliftonville
                                    [away_strength] => 1.0141661300708
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.4
                                            [X] => 0.281
                                            [2] => 0.319
                                            [1X] => 0.681
                                            [X2] => 0.6
                                            [12] => 0.719
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 1.95
                                            [X] => 3.4
                                            [2] => 3.432
                                            [1X] => 1.26
                                            [X2] => 1.736
                                            [12] => 1.26
                                        )

                                )

                            [5] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => England
                                    [prediction] => 2
                                    [status] => pending
                                    [distance_between_teams] => 324
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 
                                    [id] => 345460
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T10:32:06.868604
                                    [field_width] => 
                                    [home_team] => Fylde
                                    [home_strength] => 1.3791782396322
                                    [competition_name] => National League
                                    [away_team] => Sutton United
                                    [away_strength] => 1.8200570284536
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.237
                                            [X] => 0.249
                                            [2] => 0.514
                                            [1X] => 0.486
                                            [X2] => 0.763
                                            [12] => 0.751
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 3.573
                                            [X] => 3.597
                                            [2] => 1.867
                                            [1X] => 1.823
                                            [X2] => 1.265
                                            [12] => 1.25
                                        )

                                )

                            [6] => stdClass Object
                                (
                                    [market] => classic
                                    [competition_cluster] => Northern Ireland
                                    [prediction] => 12
                                    [status] => pending
                                    [distance_between_teams] => 30
                                    [federation] => UEFA
                                    [is_expired] => 
                                    [stadium_capacity] => 26
                                    [id] => 345467
                                    [season] => 2024 - 2025
                                    [result] => 
                                    [field_length] => 105
                                    [start_date] => 2025-03-18T19:45:00
                                    [last_update_at] => 2025-03-18T06:30:10.603414
                                    [field_width] => 68
                                    [home_team] => Glentoran
                                    [home_strength] => 0.88566827697262
                                    [competition_name] => NIFL Premiership
                                    [away_team] => Larne
                                    [away_strength] => 1.2799474893338
                                    [probabilities] => stdClass Object
                                        (
                                            [1] => 0.392
                                            [X] => 0.286
                                            [2] => 0.322
                                            [1X] => 0.678
                                            [X2] => 0.608
                                            [12] => 0.714
                                        )

                                    [odds] => stdClass Object
                                        (
                                            [1] => 2.306
                                            [X] => 3.16
                                            [2] => 2.858
                                            [1X] => 1.358
                                            [X2] => 1.532
                                            [12] => 1.296
                                        )

                                )

                        )

                )

        )

)