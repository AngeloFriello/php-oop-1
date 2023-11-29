<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';
require_once __DIR__ . '/Models/Production.php';



$film = [
    $rambo,
    $rocky,
    $commando,
    $ritorno_al_futuro,
];

// var_dump($rambo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($film as $production) { ?>
        <div>
            <h3> <?php echo $production->title ?></h3>
            <p> <?php echo $production->leanguage?></p>
            <p> <?php echo $production->rating ?></p>
        </div>
    <?php } ?>
</body>
</html>

