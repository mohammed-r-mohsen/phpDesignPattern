<?php
include_once 'Notification.php';
class SMSNotifcation implements Notification
{
    public function notifyUser():void
    {
        echo "sms_notification_user_notification ";
    }
}
