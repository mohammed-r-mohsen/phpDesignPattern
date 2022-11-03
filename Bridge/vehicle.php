<?php 
include_once 'workshop.php';
abstract class vehicle {
  protected workshop $workshop1 ;   
  protected workshop $workshop2 ;   
  public abstract function manufactor();
  public function __construct(workshop $workshop1 , workshop $workshop2) {
    $this->workshop1 = $workshop1;
    $this->workshop2 = $workshop2;
  }    
}
