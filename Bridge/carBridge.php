<?php 
class carBridge extends vehicle
{
    public function __construct(workshop $workshop1 , workshop $workshop2) {
        parent::__construct($workshop1, $workshop2);
    }

    public function manufactor(){
        echo "car work here \n" ; 
        $this->workshop1->work();
        $this->workshop2->work();
    }
}
