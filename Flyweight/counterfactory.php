<?php 
class counterFactoy 
{
    # factory s the class contain allthe game and all the player 
    private static $hm = [];
    public static  function getPlayer(string $player):player
    {
         $p = null;
        $key = array_search($player, counterFactoy::$hm, true);
        if($key===true)
           $p = counterFactoy::$hm[$player];
        else 
            switch ($player) {
                case 't':
                    $p = new Torresit();
                    break;
                case 'ct':
                    $p = new counterToresit();
                    break;
                default:
                 throw new Exception("code unchshable ", 1);
                    break;
            }
            array_push( counterFactoy::$hm , $p);
            return $p;
    }
}
