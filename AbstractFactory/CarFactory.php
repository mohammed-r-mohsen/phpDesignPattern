<?php
include_once 'DEAFULT.php' ; 
include_once 'USA.PHP' ; 
include_once 'DEAFULT.php' ; 
class CarFactory 
{
    public static function buildCar($location , $model)
    {
        switch (strtolower($location)) {
            case 'usa':
                return USAFactory::buildUSACar($model);
                break;
            case 'INDEA' :
                return INDEAFactory::buildINDEACar($model);
                break;
            case 'DEAFULT':
                return DEAFULTFactory::buildDeaflutCar($model); 
            default:
                throw new Exception("Error Processing Request", 1);
                break;
        }
    }
}
