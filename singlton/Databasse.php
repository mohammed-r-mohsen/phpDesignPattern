<?php 

class DataBase
{
    private static $Database = null;
    private function __construct() {
    
    }

    public function getname()
    {
        return 'data';
    }
    
    public function getage(){
        return '10';
    }

    public static function getInstance(){
        if(is_null(DataBase::$Database))
            DataBase::$Database = new Database();
        return DataBase::$Database;
    }
}
