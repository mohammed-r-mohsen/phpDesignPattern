<?php 
class notifcation
{
   private String $notifcation ;
   
   public function __construct($notifcation)
   {
    $this->notifcation = $notifcation;

   }

   public function getNotifcation()
   {
    return $this->notifcation;
   }


}
