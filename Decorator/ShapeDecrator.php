<?php
abstract class ShapeDecrator implements Shape{
 public Shape $shapeDectaror;

 public function __construct(Shape $shapeDectaror){
    $this->shapeDectaror = $shapeDectaror;
 }

 public function draw()
 {
    $this->shapeDectaror->draw();
 }


}