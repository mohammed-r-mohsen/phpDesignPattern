<?php 
include_once 'AbstractObserver.php';
class PatternObserver extends AbstractObserver
{
    function Update(AbstractSbject $AbstractSubject)
    {
        echo "\nnew favourit pattern ".$AbstractSubject->GetFav();
    }
}
