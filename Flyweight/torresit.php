<?php 
include_once 'player.php';
class Torresit implements player
{
    private $weapen ; 
    private $task; 
    public function __construct() {
        $this->task =  "plant the bomb ";
    }

    function assigmentWeapen(string $weapen)
    {
        $this->weapen = $weapen;
    }

     function mission()
     {
        echo "\nplayer with the weapen  weapen : $this->weapen and his task task : $this->task \n";
     }


    function __toString()
    {
        return "\nweapen : $this->weapen task : $this->task type : " . __CLASS__ . "\n";
    }
}
