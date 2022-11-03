<?php 
class CompositeDirectory implements Employee
{
    private  $emp  = array();
    private $arrayName = array(); 
   
    public function __construct() {
     
    }

    public function ShowEmplyeeDetails()
    {
        
        foreach ( $this->emp as $key => $value) {
             echo $key. " : ". $value. "\n";
        }
    }

    public function add(Employee $employee)
    {
        array_push($this->emp ,$employee);
         
    }

    public function remove(Employee $employee)
    {
        $key = array_search($employee,$this->emp, true);
        if ($key!== false) {
            unset($this->emp[$key]);
        }
    }

}
