<?php 
include_once 'collection.php';
include_once 'Notifcation.php';
include_once 'NoteficationIterator.php';
class notifcationCollection implements Collection
{
    private static  $max_item = 6 ;
    private int $numbeerofItem =0; 
    private $NotifcationList = [];

    public function __construct() {
        $this->additem("notifcation 1 \n");
        $this->additem("notifcation 2 \n");
        $this->additem("notifcation 3 \n");
    }

    function CreateIterator(): iteratorInterfacse
    {
        return new NotifcationIterator($this->NotifcationList);
    }

    public function additem(String $item)
    {
         $n = new notifcation($item);
if ($this->numbeerofItem<=notifcationCollection::$max_item) {
    $this->NotifcationList[$this->numbeerofItem]=$n;
    ++$this->numbeerofItem;
}
        else 
            echo "\nthe collection full $item";
    }
}
