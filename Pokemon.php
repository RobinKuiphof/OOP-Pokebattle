
<?php 
    $alive = 0;
    $pickachu = new Pickachu('Pickachu', 'Lightning', 60, array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20), 60, 50,20);
    $charmeleon = new Charmeleon('Charmeleon', 'Fire', 60, array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10), 60, 10,30);
    // energy type , weakness,



    class Pickachu Extends Pokemon{
        public $attack1;
        public $attack2;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health, $attack1, $attack2){
            parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $health);
            $this->attack1 = $attack1;
            $this->attack2 = $attack2;
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
    }


    class Pokemon{
     
        public $name;
        public $energyType;
        public $hitPoints;
        public $weakness;
        public $resistance;
        public $health;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitPoints = $hitPoints;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            $this->health = $health;
            $alive = $alive + 1;
        }

        public function getPopulation($pickachu, $charmeleon){    
           return $alive;
        }
    }
    

    class Fight{

    }

    class Weakness{
        
    }
    








?>