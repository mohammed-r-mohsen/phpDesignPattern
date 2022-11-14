<?php 
include_once 'MobleAlertState.php';
class Silent implements MobileAlertState
{
    function alert(AlertStateContext $alc)
    {
        echo "\nSilent";
    }
}
