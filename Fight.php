<?php 


class Fight{

    protected $pokemon1;
    protected $pokemon2;


    public function __construct($pokemon1, $pokemon2){
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function atack1($pokemon1, $pokemon2){
        $atack = $pokemon1->atacks(1);
        $weakness = new Weakness($pokemon2, $pokemon1);
        $resistance = new Resistance($pokemon2, $pokemon1);
        $dmg = $atack['dmg']*$weakness->calcweakness();
        $dmg = $dmg-$resistance->calcresistance();
        $pokemon1->health = ($pokemon1->health - $dmg);
        if($pokemon1->health < 1){
            Pokemon::setPokemondie();
        }
        return $pokemon1->name . ' Atacked '. $pokemon2->name . ' with '. $atack['name'] . ' and did ' . $dmg . ' damage. <br>' . $pokemon1->name . ' now has ' . $pokemon1->health . ' health left!';
    }
}

?>