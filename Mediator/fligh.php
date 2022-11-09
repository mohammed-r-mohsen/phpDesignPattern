<?php 
class flight implements commandMediator
{
    private iatcMediator $atcMeiator ; 

    public function __construct(iatcMediator $atcMeiator) {
        $this->atcMeiator = $atcMeiator;
    }

    function land()
    {
        if($this->atcMeiator->isLndingOk()){
            echo "succefuly landing \n";
            $this->atcMeiator->SetLandingStatus(true);
        }else {
            echo "wating for landing\n";
        }
    }
    function getReady(){
        echo "ready for landing \n";
    }
}
