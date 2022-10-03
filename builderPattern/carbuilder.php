<?php 
class carbuilder 
{
    private $motor ; 
    private $color ; 
    private $speed ;
    private $price ; 
    private $weight ; 
    
    public function __construct() {
      return $this;
    }
    public function setmotor($motor)
    {
      $this->motor = $motor;
      return $this;
    }

    public function setcolor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setspeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

}
