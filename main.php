<?php
include './Factory-pattern/NotificationFactory.php';
include './AbstractFactory/CarFactory.php';
include './builderPattern/carbuilder.php';
include './singlton/Databasse.php';
include './prototypeDesign/blueColor.php';
include './prototypeDesign/redColor.php';
include './Adapter/sparrow.php';
include './Adapter/plasticToyDuck.php';
include './Adapter/BirdToyAdapter.php';
include './Bridge/bike.php';
include './Bridge/carBridge.php';
include './Bridge/assubmle.php';
include './Bridge/produce.php';
include './composite/Devloper.php';
include './composite/Manager.php';
include './composite/CompositeDirectory.php';
include './Decorator/rectanglee.php';
include './Decorator/RedShapeDecrator.php';
include './proxy/proxyinternet.php';
include './proxy/realinternet.php';
include '.\\Flyweight\\counterfactory.php';
include '.\\Flyweight\\torresit.php';
include '.\\Flyweight\\counterToresit.php';
include '.\\chanOfResponsibilty\\chain.php';
include '.\\chanOfResponsibilty\\number.php';
include '.\\command\\light.php';
include '.\\command\\lightOnCommand.php';
include '.\\command\\lightoffCommand.php';
include '.\\iterator\\NoteficationBar.php';
include '.\\iterator\\NotifcationCollection.php';
include '.\\Mediator\\RunWay.php';
include '.\\Mediator\\fligh.php';
include '.\\Mediator\\atcMediator.php';
include '.\\Memento\\life.php';
include '.\\Memento\\memento.php';
include '.\\observer\\PatternSubject.php';
include '.\\observer\\PatternObserver.php';
include '.\\State\\AlertStateContext.php';
include '.\\State\\Silent.php';
include'.\\Strategy\\ken.php';
include'.\\Strategy\\lightKick.php';
include'.\\Strategy\\tornedoKick.php';
include '.\\Template\\NetOrder.php';
include '.\\Template\\StoreOrder.php';


try {

    echo 'factory design pattern';
    print(NotificationFactory::buildNotify('sms')->notifyUser());
    echo "\n----------------------------------------------------------------\n";
    echo "abstrct fctory pattern\n";
    print(CarFactory::buildCar('usa', 'golf'));
    echo "\n----------------------------------------------------------------\n";
    echo "builder design pattern";
    $buildcra = new carbuilder();
    $buildcra->setmotor("test")->setcolor("red")->setspeed("100");
    echo "\n----------------------------------------------------------------\n";
    echo "singleton design pattern\n";
    DataBase::getInstance()->getName();
    echo "\n----------------------------------------------------------------\n";
    echo "prototype design pattern\n";
    $redcolor = new redcolor();
    $blueColor = new bluecolor();
    $newcolor = clone $blueColor;
    //construct
    // adapter design pattern
    echo "\n----------------------------------------------------------------\n";
    echo "adapter design pattern\n";
    $sparrrow = new sparrow();
    $toyduck = new plasticToyDuck();
    $adapterBird = new BirdToyAdapter($sparrrow);
    $sparrrow->makeSound();
    $toyduck->squeck();
    $adapterBird->squeck();
    // bridge design pattern 
    echo "\n----------------------------------------------------------------\n";
    echo "bridge design pattern\n";
    $car = new carBridge(new assubmle() , new produce());
    $car->manufactor();
    echo "\n----------------------------- bike -----------------------------------\n";
    $bike = new bike(new assubmle() , new produce());
    $bike->manufactor();
    //composite design pattern 
    echo "composite design pattern\n";
    echo "\n----------------------------------------------------------------\n";
    $devloper1 = new Devloper("mohammed" , 12018 , "php Devloper") ;    
    $devloper2 = new Devloper("ahmad" , 12019 , "flutter Devloper") ;
    $manager = new Manager("alaa" , 12020 , "marketing Manager") ;
    $directory = new CompositeDirectory();
    $directory->add($devloper1) ;     
    $directory->add($devloper2) ;
    $directory->ShowEmplyeeDetails() ;
    $directory->remove($devloper2) ;
    $directory->ShowEmplyeeDetails();
   // decrator
   echo "----------------------------------------------------------------\n";
   echo "decrator design pattern" ; 
   $rectangle = new rectangle();
   $redrectangle = new RedShappeDecrator($rectangle);
   $redrectangle->draw();
   //facade 
    echo "\n----------------------------------------------------------------\n" ; 
    echo "proxy design pattern" ; 
    $realinternet = new realinternet() ; 
    $realinternet->connectingto("github.com");
    $proxyinternet = new proxyinternet() ; 
    $proxyinternet->connectingto("github.com");    
    $proxyinternet->connectingto("def.com");
    echo "\n----------------------------------------------------------------\n";
    echo 'flyweigh design pattern ' ; 
    $conterfactory = new counterFactoy();
    $ct = counterFactoy::getPlayer('ct');
    $ct->assigmentWeapen('ak-17');
    echo "$ct";
    
    echo "\n----------------------------------------------------------------\n";
    echo "chain of responsibilty design pattern";
    $chain = new chain();
    $chain->process(new number(50));   
    $chain->process(new number(-50));   
    $chain->process(new number(0));
    echo "\n------------------------------------------------------------------\n";
    echo "command design pattern";
    $light = new light();
    $lightoncommand = new lightOnCommand($light);
    $lighoffcommand = new lightOffCommand($light);
    $lightoncommand->execute();
    $lighoffcommand->execute();
    echo "\n------------------------------------------------------------------\n";
    echo "iterator design pattern\n";
    $NotfcationCollection = new notifcationCollection();
    $notoicationBar = new NotifcationBar($NotfcationCollection);
    $notoicationBar->printNotifcatins();
    echo"\n---------------------------------------------------------------------\n";
    echo "Mediator design pattern\n";
    $atcMediator = new atcMediator();
    $flight = new flight($atcMediator);
    $runway = new RunWay($atcMediator);
    $flight->getReady();
    $runway->land();
    $flight->land();
    echo "\n---------------------------------------------------------------------\n";
    echo "memento design pattern \n";
    $Memento = array();
    
    $life = new life();
    $life->setTime("1000");
    
    $Memento[0] = $life->SaveToMemento();

    $life->setTime("2000");
    
    $Memento[1] = $life->SaveToMemento();
    
    $life->setTime("3000");
    
    $Memento[2] = $life->SaveToMemento();

      foreach ($Memento as $key => $value) {
        echo $key . " : $value ";
      }
    $life->RestorFromMemento($Memento[1]);

      echo"\n----------------------------------------------------------------\n";
      echo "Observer design pattern \n";
    $patternGossiper = new PatternSubject();
    $patternGossipFan = new PatternObserver();
    $patternGossiper->attach($patternGossipFan);
    $patternGossiper->UpdateFav('abstract factory, decorator, visitor');
    $patternGossiper->UpdateFav('abstract factory, observer, decorator');
    $patternGossiper->dettach($patternGossipFan);
    $patternGossiper->UpdateFav('abstract factory, observer, paisley');
    
    echo "\n-----------------------------------------------------------------\n";
    echo "State  design pattern \n";
      
    $AlertStateContet = new AlertStateContext();
    $AlertStateContet->alert();
    $AlertStateContet->alert();
    $AlertStateContet->setState(new Silent());
    $AlertStateContet->alert();
    $AlertStateContet->alert();

    echo "\n----------------------------------------------------------------\n";
    echo "Strategy Design Pattern";
      $kickbehav1 = new lightKick();
      $kickbehav2 = new tornedoKick();
      $ken = new ken($kickbehav1);

      $ken->disply();
      $ken->punch();
      $ken->kick();

      $ken->SetKick($kickbehav2);
      $ken->kick();

      echo "\n----------------------------------------------------------------\n";
      echo "templae design pattern \n";
      $netOrder = new NetOrder();
      $netOrder->processOrder(true);
      $stoeOrder = new StoreOrder();
      $stoeOrder->processOrder(true);

  } catch (\Throwable $th) {
    echo 'Error: ' . $th->getMessage() ."\n";
    echo 'Error: ' . $th->getLine() . "\n";
    echo 'Error: ' . $th->getFile() . "\n";
    echo 'Error: ' . $th->getCode() . "\n";
}