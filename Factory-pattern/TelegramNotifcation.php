<?php

include_once 'Notification.php';
class TelegramNotifcation  implements Notification 
{
    public function notifyUser():void
    {
        echo "telegram notification user";
    }
}
