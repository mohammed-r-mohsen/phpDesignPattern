<?php 
class plasticToyDuck implements toyDuck
{
    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    public function squeck(){
     echo "squeck\n"; 
    }
}
