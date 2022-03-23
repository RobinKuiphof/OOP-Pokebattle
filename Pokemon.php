
<?php 
    $alive = 0;
    
    // energy type , weakness,



    class Pickachu Extends Pokemon{
        public $attack1;
        public $attack2;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health, $attack1, $attack2){
            parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $health);
            $this->attack1 = $attack1;
            $this->attack2 = $attack2;
        }

        public function atacks($type){
            if($type == 1){
                return array( "name" => "Electric Ring", "dmg" => $this->attack1);
            }elseif($type ==2){
                return array( "name" => "Pika Punch", "dmg" => $this->attack2);
            }
        }

    }

    class Charmeleon Extends Pokemon{

        public $attack1;
        public $attack2;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health, $attack1, $attack2){
            parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $health);
            $this->attack1 = $attack1;
            $this->attack2 = $attack2;
        }   

        public function atacks($type){
            if($type == 1){
                return array( "name" => "Head butt", "dmg" => $this->attack1);
            }elseif($type ==2){
                return array( "name" => "Flare", "dmg" => $this->attack2);
            }
        }

    }


    class Pokemon{
     
        public $name;
        public $energyType;
        public $hitPoints;
        public $weakness;
        public $resistance;
        public $health;
        public static $alive;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitPoints = $hitPoints;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            $this->health = $health;
            Self::$alive = $this->getPopulation() + 1;
        }

        public function getPopulation(){    
           return Self::$alive;
        }
    }


    class Fight{

        public $pickachu;
        public $charmeleon;


        public function __construct($pickachu, $charmeleon){
            $this->pickachu = $pickachu;
            $this->charmeleon = $charmeleon;
        }

        public function atack1($pickachu, $charmeleon){
            $atack = $pickachu->atacks(1);
            $weakness = new Weakness($charmeleon, $pickachu);
            $resistance = new Resistance($charmeleon, $pickachu);
            $dmg = $atack['dmg']*$weakness->calcweakness();
            $dmg = $dmg-$resistance->calcresistance();
            $pickachu->health = ($pickachu->health - $dmg);
            return $pickachu->name . ' Atacked '. $charmeleon->name . ' with '. $atack['name'] . ' and did ' . $dmg . ' damage. <br>Pokemon now has ' . $pickachu->health . ' health left!';
        }

        public function atack2($pickachu, $charmeleon){
            $dmg = $pickachu->atacks(0);
            $weakness = new Weakness($charmeleon, $pickachu);
            $resistance = new Resistance($charmeleon, $pickachu);
            $dmg = $dmg['dmg']*$weakness->calcweakness();
            $dmg = $dmg-$resistance->calcresistance();
            $pickachu->health = ($pickachu->health - $dmg);

            return $pickachu->name . ' Atacked '. $charmeleon->name . ' and did ' . $dmg . ' damage. <br>'. $pickachu->name . ' now has ' . $pickachu->health . ' health left!';
        }

    }

    class Weakness{
        
        public $pokemon1; // atack
        public $pokemon2; // defend

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