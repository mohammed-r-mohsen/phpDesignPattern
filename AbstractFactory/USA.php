<?PHP 
include_once 'type.php';
include_once 'location.php';
include_once 'GOLF.php';
include_once 'USA.php';
include_once 'DEAFULT.php';
class USAFactory 
{
    private static $location = location::USA;
   public static function buildUSACar($cartype){
       switch (strtolower($cartype)) {
        case 'golf':
            return new GOLF(USAFactory::$location->getlocation());
            break;
        case 'kia' : 
            return new KIA(USAFactory::$location->getlocation());
            break;
        case 'marce' : 
            return new MAECDES(USAFactory::$location->getlocation());
            break;
        default:
            throw new Exception ("Unknown cart type: " . $cartype);
            break;
       }
   }    
}
