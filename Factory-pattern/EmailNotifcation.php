<?php
include_once 'Notification.php';
class EmailNotifcation  implements Notification{
   
    function notifyUser():void{
        echo "EmailNotifcaation::notifyUser()";
    }

}


    
    

