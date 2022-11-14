<?php 
abstract class Fighter{
    private KickBehavoir $kickbehav ;

    public function __construct(KickBehavoir $kickbehav) {
        $this->kickbehav = $kickbehav;
    }

    function punch(){
        echo "\n defult punch kick ";
    }

    function kick(){
        $this->kickbehav->kick();
    }

    function SetKick(KickBehavoir $kickbehav) {
        $this->kickbehav = $kickbehav;
    }

    abstract function disply();

    
}