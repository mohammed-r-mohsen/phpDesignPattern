<?php

use function PHPSTORM_META\type;

include_once('car.php');
include_once('location.php');
include_once('type.php');

class GOLF extends car
{
    private $model = type::GOLF;
   
    public function __construct($location) {
        parent::__construct($this->model->getmodel(), $location);
    }

     public function construct():void{
      parent::__toString();
     }

}
