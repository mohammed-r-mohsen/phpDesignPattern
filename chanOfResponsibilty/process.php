<?php 
abstract class process {
    private  $nextprocess ; 

    public function __construct(?process $process) {
        $this->nextprocess = $process;
    }

    public function process(number $request)
    {
        
        if (!is_null($this->nextprocess))
       {
            return $this->nextprocess->process($request);
        }
    }
}