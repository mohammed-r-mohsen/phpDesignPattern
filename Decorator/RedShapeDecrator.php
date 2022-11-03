<?php 
include_once 'ShapeDecrator.php';
class RedShappeDecrator extends ShapeDecrator 
{
    public function __construct(Shape $shapeDecrroator) {
        parent::__construct($shapeDecrroator);
    }

    public function draw()
    {
          $this->shapeDectaror->draw();
          $this->redborder();
    }

    private function redborder(){
        echo "\nred shape border is seetting up\n ";
    }

}
