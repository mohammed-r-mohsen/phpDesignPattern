<?PHP 
include_once 'type.php';
include_once 'location.php';
class INDEAFactory 
{
    private static $location = location::DEAFULT ;
   public static function buildINDEACar( $cartype){
       switch (strtolower($cartype)) {
        case 'golf':
            return new GOLF(INDEAFactory::$location->getlocation());
            break;
        case 'kia' : 
            return new KIA(INDEAFactory::$location->getlocation());
            break;
        case 'marce' : 
            return new MAECDES(INDEAFactory::$location->getlocation());
            break;
        default:
            throw new Exception ("Unknown cart type: " . $cartype);
            break;
       }
   }    
}
