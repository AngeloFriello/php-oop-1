<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{

    public $profit;
    public $duration;

    public function __construct($_title, $_leanguage, $_rating, $_duration, $_profit) {
        parent::__construct($_title, $_leanguage, $_rating);
        $this->setDuration($_duration);   
        $this->profit = $_profit;
    }

    public function setDuration($_duration)
  {
    $this->duration = $_duration;
  }

   
}
$ritorno_al_crimine = new Movie('Ritorno al Crimine', 'Italiano', '3','120min','4milioni');
$la_dura_verita = new Movie('Rambo', 'English', '5','120min','4milioni');
$non_ci_resta_che_piangere = new Movie('Rocky', 'English', '5','120min','4milioni');
$commandiamo_noi = new Movie('Commando', 'English', '5','120min','4milioni');
$ritorno_al_passato = new Movie('Ritorno al Futuro', 'English', '5','120min','4milioni');
?>