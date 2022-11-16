<?php 
abstract class OrderProcessTemplate
{
     public bool $isGift;
 
     abstract function doSelect();
 
     abstract function doPayment();

     abstract function doDilevry();

     function giftTrap(){
        try {
            echo "gift trap succefully\n ";
        } catch (\Throwable $th) {
            echo "gift trap unsuccefully\n ";
        }
     }

     function processOrder(bool $isGift){
            $this->doSelect();
            $this->doPayment();
                if($isGift):
                    $this->giftTrap();
                endif;
            $this->doDilevry();
     }
}
