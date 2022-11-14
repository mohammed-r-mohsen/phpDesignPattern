<?php 
include_once 'MobleAlertState.php';
class Vibraion implements MobileAlertState
{
    function alert(AlertStateContext $alc){
        echo "\nVibraion....";
    }
}
