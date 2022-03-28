<?php
require('attack.php');
require('type.php');



class Pokemon{
    public static $count=0;
    public $name;
    public $energyType;
    public $maxHP;
    public $attack;
    public $health;
    public $resistance;
    public $weakness;


public function __construct($name, $energyType,$maxHP,$attack,$health, $resist, $weak, $dmg){
    $this->name = $name;
    $this->energyType = new Type($energyType, $weak, $resist);
    $this->maxHP = $maxHP;
    $this->attack = new Attack($attack, $dmg);
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