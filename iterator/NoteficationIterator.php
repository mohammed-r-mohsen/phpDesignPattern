<?php 
include_once 'iterator.php';
class NotifcationIterator implements iteratorInterfacse
{
    private  $NotifcationList = []; 
    private $pos = 0 ; 

    public function __construct($NotifcationList)
    {
        $this->NotifcationList = $NotifcationList;
    }

    function next():object
    {
        
        $notifcation = $this->NotifcationList[$this->pos++];
        
        return $notifcation;
    }

    function hasNext(): bool
    {
        return  ($this->pos >= count($this->NotifcationList) || is_null($this->NotifcationList[$this->pos])) ? false : true ;
    }
}
