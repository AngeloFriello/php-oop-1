<?php

class Movie{

public $profit;
public $duration;


    function __construct($_profit, $_duration,) {

        $this->profit = $_profit;
        $this->duration = $_duration;
        
    }

    
}

$rambo = new Production(456,'English','5');
$rocky = new Production('Rocky','English','4');
$commando = new Production('Commando','Italiano','3');
$ritorno_al_futuro = new Production('Ritorno al futuro','English','5');


?>