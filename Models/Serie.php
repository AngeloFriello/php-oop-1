<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    public $season;

    public function __construct($_title, $_leanguage, $_rating, $_season)
    {
        parent::__construct($_title, $_leanguage, $_rating);
        $this->season = $_season;
    }

}

$friend = new Serie('Friend', 'English', '5 stagioni','9stagioni');
$lethal_weaphon = new Serie('Lethal weaphon', 'English', '5','9stagioni');
$how_i_meet_your_mother = new Serie('How i meet your mother', 'English', '5','9stagioni');
$lucifer = new Serie('Lucifer', 'English', '5','9stagioni');
$the_big_bang_theory = new Serie('The big bang theory', 'English', '5','9stagioni');

?>