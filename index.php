<?php
require('attack.php');
require('resistance.php');
require('weakness.php');




class Pokemon{
    private static $count=0;
    private $name;
    private $energyType;
    private $maxHP;
    private $attack;
    private $health;
    private $resistance;
    private $weakness;


protected function __construct($name, $energyType,$maxHP,$attack,$health,$resistance,$weakness, $resist, $weak){
    $this->name = $name;
    $this->energyType = $energyType;
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $health;
    $this->resistance = new Resistance($resist);
    $this->weakness = new Weakness($weak);
    pokemon::$count++;
        return true;

}
public static function getPopulation(){
    return pokemon::$count;
}
}
?>