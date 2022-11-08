<?php

include_once 'command.php';

class lightOffCommand implements command
{
    private light $light ; 
    
    public function __construct(light $light) {
        $this->light = $light;
    }

    function execute(){
        $this->light->off();
    }
}
