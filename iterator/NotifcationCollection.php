<?php 
class notifcationCollection implements Collection
{
    private static  $max_item = 6 ;
    private int $numbeerofItem ; 
    private $NotifcationList = [];

    public function __construct() {
        $this->additem('notifcation 1 ');
        $this->additem('notifcation 2 ');
        $this->additem('notifcation 3 ');
    }

    function CreateIterator(): iteratorInterfacse
    {
        return new NotifcationIterator($this->NotifcationList);
    }

    public function additem(String $item)
    {
         $n = new notifcation($item);
         if(!$this->numbeerofItem>=$this->max_item)
            $this->NotifcationList[$this->numbeerofItem++]=$n;
        else 
            echo 'the collection full ';
    }
}
