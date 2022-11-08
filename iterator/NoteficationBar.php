<?php 
class NotifcationBar
{
    private notifcationCollection $Notifcations ;

    public function __construct(notifcationCollection $notifcations) {
        $this->Notifcations = $notifcations;
    }

    function printNotifcatins(){
        $iteator = $this->Notifcations->CreateIterator();

        while ($iteator->hasNext()):
            $n =  $iteator->next();
            echo $n->getNotifcation();
        endwhile;
        
    }
}
