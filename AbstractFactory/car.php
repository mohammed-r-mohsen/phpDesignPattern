<?php 
abstract class car{
    private $model ; 
    private $locaion  ;

    abstract public function construct():void;

    public function __construct($model , $location) {
        $this->model = $model;
        $this->locaion = $location;
    }

    public function Setmodel($model){
        $this->model = $model;
    }

    public function Getmodel(){
        return $this->model ;
    }

    public function Setlocaion($locaion){
        $this->locaion = $locaion;
    }

    public function Getlocaion(){
        return $this->locaion ;
    }

    public function __toString()
    {
        return "$this->model , $this->locaion";
    }      

}