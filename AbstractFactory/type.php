<?php 
enum type:string{
    case GOLF  = "GOLF"; 
    case KIA = "KIA";  
    case MAECDES = "MAECDES"; 

    public function getmodel()
    {
        return $this->name;
    }
}