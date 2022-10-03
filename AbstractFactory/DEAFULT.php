<?PHP 
include_once 'type.php';
include_once 'location.php';
class DEAFULTFactory 
{
    private static $location = location::DEAFULT ;
   public static function buildDeaflutCar($cartype){
    
       switch (strtolower($cartype)) {
        case 'golf':
            return new GOLF(DEAFULTFactory::$location->getlocation());
            break;
        case 'kia' : 
            return new KIA(DEAFULTFactory::$location->getlocation());
            break;
        case 'marce' : 
            return new MAECDES(DEAFULTFactory::$location->getlocation());
            break;
        default:
            throw new Exception ("Unknown cart type: " . $cartype);
            break;
       }
   }    
}
