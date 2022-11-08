<?php 
include_once 'negativeprocess.php';
include_once 'postiveprocess.php';
include_once 'zeroproces.php';
class chain 
{
    private $chain ; 
    public function __construct() {
        $this->buildchin();
    }

    private function buildchin(){
        $this->chain = new negativeprocess(new postiveprocess(new zeroprocess(null)));
    }

    function process(number $request)
    {
         $this->chain->process($request);
    }
}
