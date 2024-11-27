<?php
require_once('component.php');

class ChestCase extends Component{

    public function indossa(){
        echo "$this->part indossato \n";
    }

    public function attacca(){
        echo "Un potente raggio atomico fuoriesce dal core sul tuo $this->part \n";
    }

    public function difendi(){
        echo "Il tuo $this->part ha assorbito il colpo\n";
    }

}




?>