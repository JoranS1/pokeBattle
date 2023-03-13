<?php
// Pidgey class that is a child of the Pokemon class
class Pidgey extends Pokemon{
    public function __construct(){
        $name = "Pidgey";
        $energyType = "Flying";
        $maxHP = 100;
        $attack = [new Attack("Wing Attack", 40), new Attack("Peck", 20)];
        $health = 100;
        $resistance = [new Resistance("Ground", 4)];
        $weakness = [new Weakness("Electric", 2)];
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}