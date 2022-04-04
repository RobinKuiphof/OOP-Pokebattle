<?php



class Pickachu Extends Pokemon{
    protected $attack1;
    protected $attack2;

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



?>