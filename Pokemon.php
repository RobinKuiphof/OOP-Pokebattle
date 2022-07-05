
<?php 


    class Pokemon{
     
        public $name;
        public $energyType;
        protected $hitPoints;
        public $weakness;
        public $resistance;
        public $health;
        public static $alive;

        public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $health){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitPoints = $hitPoints;
            $this->weakness =  new Weakness($weakness);
            $this->resistance = new Resistance($resistance);
            $this->health = $health;
            Self::$alive = $this->getPopulation() + 1;
        }

        public function attack($pokemon2, $numberAtack){
            if($this->energyType == $pokemon2->weakness->weakness['type']){
                $weakness = $pokemon2->weakness->weakness['value'];
            }else{
                $weakness = 1;
            }
    
            if($this->energyType == $pokemon2->resistance->resistance['type']){
                $resistance = $pokemon2->resistance->resistance['value'];
            }else{
                $resistance = 0;
            }
           
            $attack = $this->attacks($numberAtack);
            // calc weakness
            
            $dmg = $attack['dmg']*$weakness;
            // calc resistance
            $dmg = $dmg-$resistance;
    
            $this->health = ($this->health - $dmg);
    
            // kill pokemon if less then 1 health
    
            if($this->health < 1){
                Pokemon::setPokemondie();
            }
    
            return $this->name . ' attacked '. $pokemon2->name . ' with '. $attack['name'] . ' and did ' . $dmg . ' damage. <br>' . $this->name . ' now has ' . $this->health . ' health left!';    
        }

        public function getPopulation(){    
           return Self::$alive;
        }

        public function setPokemondie(){
            Self::$alive = Self::$alive -1;
            return Self::$alive;
        }
    }


    






?>