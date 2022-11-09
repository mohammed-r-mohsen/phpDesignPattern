<?php 
include_once 'AbstractSubject.php';
class PatternSubject extends AbstractSbject
{
    private $favPattern = null ; 
    private $Observer = array();

    function attach(AbstractObserver $AbstractObservr)
    {
        $this->Observer[] = $AbstractObservr;
    }

    function dettach(AbstractObserver $AbstractObservr)
    {
        $key = array_search($AbstractObservr , $this->Observer, true);
        if ($key !== false) {
            unset($this->Observer[$key]);
        }
    }

    function Notify()
    {
        foreach ($this->Observer as $obs):
        $obs->Update($this);
        endforeach;
    }

    function UpdateFav($newsFav){
        $this->favPattern = $newsFav;
        $this->Notify();
    }

    function GetFav(){
        return $this->favPattern;
    }
}
