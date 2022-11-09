<?php 
abstract class AbstractSbject{

    abstract function attach(AbstractObserver $AbstractObservr);
    abstract function dettach(AbstractObserver $AbstractObservr);
    abstract function Notify();
    abstract function GetFav();
}