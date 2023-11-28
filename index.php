<?php

class Production{

    public $title;
    public $leanguage;
    public $rating;
    
    function __construct($_title, $_leanguage, $_rating) {
        $this->setTitle($_title);
        $this->leanguage = $_leanguage;
        $this->setRating($_rating);
    }

    public function setTitle($title) {
        if(is_string($title)){
            $this->title = $title;
        }
    }

    public function setRating($rating)  {
        if (is_numeric($rating) && $rating >= 0) {
            $this->rating = intval($rating);
        } else {
            $this->rating = 0;
            var_dump('Il parametro $rating non è corretto');
        }
    }
}

$rambo = new Production(456,'English','5');
$rocky = new Production('Rocky','English','4');
$commando = new Production('Commando','Italiano','3');
$ritorno_al_futuro = new Production('Ritorno al futuro','English','5');

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

