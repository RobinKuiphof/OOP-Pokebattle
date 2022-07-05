<?php

require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'Resistance.php';
require 'Weakness.php';


    $pickachu = new Pickachu('Pickachu', 'Lightning', 60, array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20), 60, 50,20);

    $charmeleon = new Charmeleon('Charmeleon', 'Fire', 60, array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10), 60, 10,30);

    echo Pokemon::getPopulation() . ' Pokemons alive <br>';
    
   
    echo $pickachu->health . ' Pickachu health <br>';
    echo $charmeleon->attack($pickachu, 1). '<br>';
    echo $charmeleon->health . ' Charmeleon health <br>';
    echo $pickachu->attack($charmeleon, 1). '<br>';

    echo Pokemon::getPopulation() . ' Pokemons alive <br>';
?>
