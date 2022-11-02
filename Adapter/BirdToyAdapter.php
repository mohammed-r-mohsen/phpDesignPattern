<?php 

include_once 'BirdInterface.php';

class BirdToyAdapter  implements toyDuck 
{
   private Bird $bird ;  


     function __construct(Bird $bird) {
        $this->bird = $bird;
    }

    
      function squeck() {
       $this->bird->makeSound();
    }
}