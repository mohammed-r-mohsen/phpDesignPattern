<?php

use function PHPSTORM_META\type;

include_once('car.php');
include_once('location.php');
include_once('type.php');

class KIA extends car
{
    private $model = type::KIA;
    public function __construct($location) {
        parent::__construct($this->model->getmodel(),$location);
    }
    
    public function construct():void{
        echo parent::Getmodel() . " " . parent::Getlocaion();
       }

}
