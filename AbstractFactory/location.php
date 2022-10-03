<?php 
enum location:string{
    case USA = 'USA';
    case INDEA = 'INDEA';
    case DEAFULT = 'DEAFULT';

    public function getlocation()
    {
        return $this->name;
    }
}