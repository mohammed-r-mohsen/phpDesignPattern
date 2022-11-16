<?PHP 
include_once 'OrderProcessTemplate.php';
class NetOrder extends OrderProcessTemplate 
{
     function doSelect(){
        print("Item added to online shopping cart\n");
        print("Get gift wrap preference\n");
        print("Get delivery address.\n");
     }

     function doPayment(){
        print "Online Payment through Netbanking, card or Paytm\n";
     }

     function doDilevry(){
        print ("Ship the item through post to delivery address\n");
     }

}
