<?php 
include_once 'Fighter.php';
class ken extends Fighter {

    public function __construct(KickBehavoir $kickBehavoir) {
        parent::__construct($kickBehavoir);
    }

    function disply()
    {
        echo "\nken fighter ";
    }
}