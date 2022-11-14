<?php

include_once 'Vibratioin.php';
class AlertStateContext
{
    private MobileAlertState $Currentstate ;

    public function __construct() {
        $this->Currentstate = new Vibraion();
    }

    public function SetState(MobileAlertState $State){
        $this->Currentstate = $State;
    }
    
    public function GetState() {
        return $this->Currentstate;
    }

    function alert() {
        $this->Currentstate->alert($this);
    }

}
