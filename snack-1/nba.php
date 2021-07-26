<?php

$matches_day_1 = [
    [
        "home_name" => "Boston Celtics",
        "home_score" => rand(50, 150),
        "away_name" => "Brooklin Nets",
        "away_score" => rand(50, 150)
    ],
    [
        "home_name" => "New York Knicks",
        "home_score" => rand(50, 150),
        "away_name" => "Philadelphia 76ers",
        "away_score" => rand(50, 150)
    ],
    [
        "home_name" => "Toronto Raptors",
        "home_score" => rand(50, 150),
        "away_name" => "Chicago Bulls",
        "away_score" => rand(50, 150)
    ],
    [
        "home_name" => "Cleveland Cavaliers",
        "home_score" => rand(50, 150),
        "away_name" => "Detroit Pistons",
        "away_score" => rand(50, 150)
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA - Day 1</title>
</head>
<body>
    <ul>
    
        <?php for ($i = 0; $i < count($matches_day_1); $i++) { ?>
        <li>
            <?php echo (
            $matches_day_1[$i]["home_name"] . " - " .
            $matches_day_1[$i]["away_name"] . " | " . 
            $matches_day_1[$i]["home_score"] . "-" .
            $matches_day_1[$i]["away_score"]
            );?>
        </li>
        <?php }; ?>
    
    </ul>
</body>
</html>