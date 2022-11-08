<?php 
include_once 'process.php';
class postiveprocess extends process 
{
    public function __construct( $nextprocess)
    {
        parent::__construct($nextprocess);
    }

    public function process(number $request)
    {
        if ($request->getNumber() > 0)
            echo "\npostiv process the number is : ".$request->getNumber();
        else
            parent::process($request);
    }
}
