<?php 
include_once 'iatcMediator.php';
class atcMediator implements iatcMediator
{
    private RunWay $runway ; 
    private flight $flight ; 
    private bool $land ; 

    function RegisterFlight(flight $flght)
    {
        $this->flight = $flght;
    }

    function RegisterRunway(RunWay $r)
    {
        $this->runway = $r;
    }

    function SetLandingStatus(bool $landingStatus)
    {
        $this->land = $landingStatus;
    }

    function isLndingOk():bool{
        return $this->land;
    }
}
