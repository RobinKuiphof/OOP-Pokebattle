
<?php 

    $pickachu = new Pokemon('Pickachu', 'Lightning', 60, [array("name" => "Electric Ring", "damage" => 50),array("name" => "Pika Punch", "damage" => 20)], array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20));
    $charmeleon = new Pokemon('Charmeleon', 'Fire', 60, [array("name" => "Head Butt", "damage" => 10),array("name" => "Flare", "damage" => 30)], array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10));

    class Pokemon{
        public $name;
        public $energyType;
        public $hitPoints;
        public $weakness;
        public $attack;
        public $resistance;
        

        public function __construct($name, $energyType, $hitPoints, $weakness, $attack, $resistance){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitPoints = $hitPoints;
            $this->weakness = $weakness;
            $this->attack = $attack;
            $this->resistance = $resistance;
        }
    
        public function __toString() {
            return json_encode($this);
        }
        
    }
    












?>