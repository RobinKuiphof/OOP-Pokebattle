<?php 


class Fight{

    protected $pokemon1;
    protected $pokemon2;


    public function __construct($pokemon1, $pokemon2){
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function attack1($pokemon1, $pokemon2){
        
        if($pokemon1->energyType == $pokemon2->weakness->weakness['type']){
            $weakness = $pokemon2->weakness->weakness['value'];
        }else{
            $weakness = 1;
        }

        if($pokemon1->energyType == $pokemon2->resistance->resistance['type']){
            $resistance = $pokemon2->resistance->resistance['value'];
        }else{
            $resistance = 0;
        }
       
        $attack = $pokemon1->attacks(1);
        // calc weakness
        
        $dmg = $attack['dmg']*$weakness;
        // calc resistance
        $dmg = $dmg-$resistance;

        $pokemon1->health = ($pokemon1->health - $dmg);

        // kill pokemon if less then 1 health

        if($pokemon1->health < 1){
            Pokemon::setPokemondie();
        }

        return $pokemon1->name . ' attacked '. $pokemon2->name . ' with '. $attack['name'] . ' and did ' . $dmg . ' damage. <br>' . $pokemon1->name . ' now has ' . $pokemon1->health . ' health left!';
    }
}

?>

