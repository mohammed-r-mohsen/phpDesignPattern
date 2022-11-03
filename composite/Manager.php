<?php
class Manager implements Employee
{
    private $name;
    private $id;
    private $postion;

    public function __construct($name, $id, $postion)
    {
        $this->name = $name;
        $this->id = $id;
        $this->postion = $postion;
    }

    public function ShowEmplyeeDetails()
    {
        echo "name : $this->name \n id : $this->id \n $this->postion";
    }

    public function __toString()
    {
        return "\nname : $this->name \n id: $this->id \n postion : $this->postion\n";
    }
}
