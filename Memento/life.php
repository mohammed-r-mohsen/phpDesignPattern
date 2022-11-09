<?php 
class life 
{
    private $time ; 

    function setTime(String $time){
        echo "settiing time to $time\n";
        $this->time = $time;
    }

    function SaveToMemento(){
        echo "saving to memento $this->time\n";
        return new memento($this->time);

    }

    function RestorFromMemento(memento $memento){
     echo "\nrestoring from memento\n";
        $this->time = $memento->getSavedTime();
      echo "$this->time";
    }

    function getTime(){
        return $this->time ."\n";
    }
}
