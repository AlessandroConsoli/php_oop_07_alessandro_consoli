<?php
require_once('component.php');

class Arms extends Component{

    public function indossa(){
        echo "$this->part inserite \n";
    }

    public function attacca(){
        echo "Usi i reattori sui tuoi palmi per abbrustolire il nemico \n";
    }

    public function difendi(){
        echo "Incroci le braccia davanti a te e blocchi l'attacco \n";
    }


}




?>