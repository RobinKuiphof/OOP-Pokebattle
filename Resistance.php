<?php



class Resistance{

    public $pokemon1; // atack
    public $pokemon2; // defend

    public function __construct($pokemon1, $pokemon2){
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function calcresistance(){
        
        if($this->pokemon1->energyType == $this->pokemon2->resistance['type']){
            return $this->pokemon2->resistance['value'];
        }else{
            return 0;
        }
    }
}



?>
