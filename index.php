<?php

class Production{
    public $title;
    public $leanguage;
    public $rating;
    
    function __construct(String $_title, $_leanguage, $_rating) {

        $this->title = $_title;
        $this->leanguage = $_leanguage;
        $this->rating = $_rating;

    }

    public function setTitle($title){
        if(is_string($title)){
            $this->title = $title;
        }else{
            $this->title = 'undefined';
            var_dump('undefined');
        }
    }

    public function setAge($rating)
    {
    if (is_numeric($rating) && $rating >= 0) {
      $this->rating = intval($rating);
    } else {
      $this->rating = 0;
      var_dump('Il parametro $rating non è corretto');
    }
  }
}

$rambo = new Production('Rambo','English','5');
$rocky = new Production('Rocky','English','4');
$commando = new Production('Commando','Italiano','3');
$ritorno_al_futuro = new Production('Ritorno al futuro','English','5');


var_dump($rambo)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($film as $production){
            ?>
            <div>
                <h3> <?php $production->title ?></h3>
            </div>
            <?php
        }
    ?>
</body>
</html>

