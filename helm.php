<?php
require_once('component.php');

class Helm extends Component{


    public function indossa(){
        echo "$this->part indossato \n";
    }

    public function attacca(){
        echo "Testata di Ironman!! \n";
    }

    public function difendi(){
        echo "Ricevi un colpo alla testa ma per fortuna il tuo $this->part ti protegge \n";
    }

}



?>