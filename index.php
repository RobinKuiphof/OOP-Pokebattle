<?php

require 'Pokemon.php';
require 'Fight.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'Resistance.php';
require 'Weakness.php';


    $pickachu = new Pickachu('Pickachu', 'Lightning', 60, array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20), 60, 50,20);

    $charmeleon = new Charmeleon('Charmeleon', 'Fire', 60, array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10), 60, 10,30);

    echo Pokemon::getPopulation() . ' Pokemons alive <br>';
    
    $attack = new Fight($pickachu, $charmeleon);
    echo $pickachu->health . ' Pickachu health <br>';
    echo $attack->atack1($pickachu,$charmeleon). '<br>';
    echo $charmeleon->health . ' Charmeleon health <br>';
    echo $attack->atack1($charmeleon,$pickachu). '<br>'; 

    echo Pokemon::getPopulation() . ' Pokemons alive <br>';
?>
