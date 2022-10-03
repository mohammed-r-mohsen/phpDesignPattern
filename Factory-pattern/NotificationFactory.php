<?php
include 'EmailNotifcation.php';
include 'SMSNotifcation.php';
include 'TelegramNotifcation.php';

class NotificationFactory 
{
    public static function buildNotify($notifyTypee)
    {
        
            switch (strtolower($notifyTypee)) :
                case 'sms':
                    return new SMSNotifcation();
                    break;
                case 'telegram':
                    return new TelegramNotifcation();
                    break;
                case 'email':
                    return new EmailNotifcation();
                    break;
                default:
                    throw new Exception("Error Processing Request type", 1);
                
            endswitch;

        
        
    }
}
