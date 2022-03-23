<?php

require 'Pokemon.php';


    $pickachu = new Pickachu('Pickachu', 'Lightning', 60, array("type" => "fire", "multiplier" => 1.5), array("type" => "Fighting", "value" => 20), 60, 50,20);

    $charmeleon = new Charmeleon('Charmeleon', 'Fire', 60, array("type" => "Water", "multiplier" => 2), array("type" => "Lightning", "value" => 10), 60, 10,30);

    echo Pokemon::getPopulation() . 'Pokemons alive <br>';
    
    $attack = new Fight($pickachu, $charmeleon);
    echo $attack->atack1($pickachu,$charmeleon). '<br>';
    echo $attack->atack1($charmeleon,$pickachu). '<br>';

    echo Pokemon::getPopulation() . 'Pokemons alive <br>';
?>
