<?php
include './Factory-pattern/NotificationFactory.php';
include './AbstractFactory/CarFactory.php';
include './builderPattern/carbuilder.php';
include './singlton/Databasse.php';
include './prototypeDesign/blueColor.php';
include './prototypeDesign/redColor.php';
try {
    
    echo 'factory design pattern'; 
    print(NotificationFactory::buildNotify('sms')->notifyUser());
    echo "\n----------------------------------------------------------------\n";
    echo "abstrct fctory pattern\n";
    print(CarFactory::buildCar('usa' , 'golf'));
    echo "\n----------------------------------------------------------------\n";
    echo "builder design pattern";
    $buildcra = new carbuilder() ;
    $buildcra->setmotor("test")->setcolor("red")->setspeed("100");
    echo "\n----------------------------------------------------------------\n";
    echo "singleton design pattern\n";
    DataBase::getInstance()->getName();
    echo "\n----------------------------------------------------------------\n";
    echo "prototype design pattern\n";
    $redcolor = new redcolor() ;
    $blueColor = new bluecolor() ;
    $newcolor = clone $blueColor ;
    //construct
} catch (\Throwable $th) {
    echo 'Error: ' . $th->getMessage(). "\n";
    echo 'Error: ' . $th->getLine(). "\n";
    echo 'Error: ' . $th->getFile(). "\n";
    echo 'Error: ' . $th->getCode(). "\n";
    
   
}
