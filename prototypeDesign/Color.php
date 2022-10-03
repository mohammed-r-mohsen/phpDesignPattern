<?php 
abstract class Color 
{
    protected $colorname ;
    abstract public function __clone();
   
    public function getColorName():string {
        return $this->colorname;
    }

    public function setColorName(string $colorName):void {
    $this->colorname = $colorName;

    }

    
}