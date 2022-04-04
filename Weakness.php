<?php



class Weakness{
        
    protected $pokemon1; // atack
    protected $pokemon2; // defend

    public function __construct($pokemon1, $pokemon2){
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function calcweakness(){
        if($this->pokemon1->energyType == $this->pokemon2->weakness['type']){
            return $this->pokemon2->weakness['value'];
        }else{
            return 1;
        }
    }

}


?>