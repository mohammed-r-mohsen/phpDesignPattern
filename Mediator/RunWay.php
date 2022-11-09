<?php
include_once 'commandMediator.php'; 
class RunWay implements commandMediator
{
    private iatcMediator $atcMediator;
    
    public function __construct(iatcMediator $acMediator) {
        $this->atcMediator = $acMediator;
        $this->atcMediator->SetLandingStatus(true);
    }

    function land()
    {
        echo"landing permission granted \n";
        $this->atcMediator->SetLandingStatus(true);
    }


}
