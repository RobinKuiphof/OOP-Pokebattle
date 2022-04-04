
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
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            $this->health = $health;
            Self::$alive = $this->getPopulation() + 1;
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