<?php
require_once('component.php');

class Legs extends Component{

    public function indossa(){
        echo "$this->part inseriti \n";
    }

    public function attacca(){
        echo "Sferri una serie di potentissimi calci \n";
    }

    public function difendi(){
        echo "I tuoi $this->part hanno attutito il colpo \n";
    }

}




?>