<?php 
 class memento 
{
   private  $time;

   public function __construct(String $time) {
    $this->time = $time;
   }

   function  getSavedTime():String{
    return $this->time;
   }
    
   function __toString()
   {
     return $this->getSavedTime();
   }
}
