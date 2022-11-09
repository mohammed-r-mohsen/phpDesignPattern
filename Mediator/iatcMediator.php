<?php 
interface iatcMediator{

    function RegisterRunWay(RunWay $RunWy);
    
    function RegisterFlight(flight $flght);
    
    function isLndingOk():bool;

    function SetLandingStatus(bool $landingStatus);
}