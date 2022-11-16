<?php 
include_once 'OrderProcessTemplate.php';
class StoreOrder extends OrderProcessTemplate 
{
     function doSelect(){
        print "Customer chooses the item from shelf.\n";
     }

     function doPayment(){
        print "Pays at counter through cash/POS\n";
     }

     function doDilevry(){
        print "Item delivered to in delivery counter.\n";
     }

}
