<?php
class Pikachu extends Pokemon{
    public function __construct(){
        $name = "Pikachu";
        $energyType = "Electric";
        $maxHP = 60;
        $attack = [new Attack("Thunderbolt", 40), new Attack("Thunder Punch", 20)];
        $health = 60;
        $resistance = [new Resistance("Flying", 1.5)];
        $weakness = [new Weakness("Ground", 20)];
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}