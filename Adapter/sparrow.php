<?php 
include_once 'BirdInterface.php';
class sparrow implements Bird
{
     
     public function __construct(Type $var = null) {
        $this->var = $var;
     }

     public function fly(){
        echo "flying\n";
     }

     public function makeSound()
     {
         echo "chirp\n";
     }
}
