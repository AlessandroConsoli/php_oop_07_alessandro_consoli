<?php

require_once('helm.php');
// require_once('component.php');
require_once('chestCase.php');
require_once('arms.php');
require_once('legs.php');



class IronMan{
    
    public $name;
    public $helm;
    public $chestCase;
    public $arms;
    public $legs;
    
    public static $counter = 0;
    
    public function __construct(string $name, Helm $helm, ChestCase $chestCase, Arms $arms, Legs $legs){
        $this->name = $name;
        $this->helm = $helm;
        $this->chestCase = $chestCase;
        $this->arms = $arms;
        $this->legs = $legs;
        self::$counter++;
    }

    public function getName(){
        echo $this->name;

    }
    
    public function preparati(){
        echo $this->getName() . $this->helm->indossa() . $this->chestCase->indossa() . $this->arms->indossa() . $this->legs->indossa();
    }

    public static function showCounter(){
        echo "Sono presenti ben " . self::$counter . " Iron Man \n" . "\n";
    }
    
}


// Problema n°1 - Non compare il nome
// Problema n°2 Come distinguere gli attacchi dei vari Iron Man
// Problema n°3 Voglio poter lasciare una riga vuota in base a quello che stampo

$ironMan = new IronMan ("Iron Man: \n", new Helm("Elmo d'acciaio"), new ChestCase("Pettorale atomico"), new Arms("Braccia d'acciaio"), new Legs("Gambali d'acciaio"));


$darkIronMan = new IronMan ("Iron Man Nero: \n", new Helm("Elmo di Mithril"), new ChestCase("Pettorale di Mithril"), new Arms("Braccia di Mithril"), new Legs("Gambali di Mithril"));



$hulkBusterIronMan = new IronMan ("MARK 44 Hulk Buster: \n", new Helm("Elmo spesso rinforzato"), new ChestCase("Pettorale rinforzato"), new Arms("Braccia rinforzate"), new Legs("Gambali rinforzati"));


$ironMan->preparati();
$darkIronMan->preparati();
$hulkBusterIronMan->preparati();

IronMan::showCounter();

$ironMan->getName();
$ironMan->chestCase->attacca();
$darkIronMan->getName();
$darkIronMan->legs->attacca();
$hulkBusterIronMan->getName();
$hulkBusterIronMan->chestCase->difendi();
// $ironMan->chestCase->difendi();
// $ironMan->legs->difendi();
// $darkIronMan->legs->attacca();
// $darkIronMan->helm->attacca();
// $ironMan->arms->attacca();
// $hulkBusterIronMan->helm->difendi();
// $ironMan->chestCase->difendi();
// $ironMan->legs->difendi();
// $ironMan->legs->attacca();

?>