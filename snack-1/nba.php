<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches_day1 = [
    [
        home_name => "Boston Celtics",
        home_points => rand(50, 150),
        away_name => "Brooklin Nets",
        away_points => rand(50, 150)
    ],
    [
        home_name => "New York Knicks",
        home_points => rand(50, 150),
        away_name => "Philadelphia 76ers",
        away_points => rand(50, 150)
    ],
    [
        home_name => "Toronto Raptors",
        home_points => rand(50, 150),
        away_name => "Chicago Bulls",
        away_points => rand(50, 150)
    ],
    [
        home_name => "Cleveland Cavaliers",
        home_points => rand(50, 150),
        away_name => "Detroit Pistons",
        away_points => rand(50, 150)
    ]
];

var_dump($matches_day1)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>