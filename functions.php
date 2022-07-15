<?php
require('attack.php');
require('type.php');
require('resistance.php');
require('weakness.php');
require('type.php');


class Pokemon{
    public static $count=0;
    protected $name;
    protected $energyType;
    protected $maxHP;
    protected $attack;
    protected $health;
    protected $resistance;
    protected $weakness;
    protected $weakInt;
    protected $resistInt;

public function __construct(string $name, $energyType, int $maxHP, $healing,  $attack, $resist, $weakness){
    $this->name = $name;
    $this->energyType = $energyType;
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $healing;
    $this->resistance = $resist;
    $this->weakness = $weakness;
    self::$count++;

}
public function damageCalculate($attackName, $attackingPokemon){
    	if($this->weakness[0]->weakType === $attackingPokemon->energyType){
            $attacking = $this->weakness[0]->weakMultiplier * $attackingPokemon->attack[$attackName]->attackDmg;
        }
        else if($this->resistance[0]->resistType === $attackingPokemon->energyType){
            $attacking = $attackingPokemon->attack[$attackName]->attackDmg - $this->resistance->resistMultiplier;
        }
        else{
            $attacking = $attackingPokemon->attack[$attackName]->attackDmg;
        }
        $this->maxHP = $this->maxHP - $attacking;
        print_r($this->name . "'s has " . $this->maxHP . " hp left <br><br><br>");
}
    public function __toString()
    {
        return json_encode($this);
    }
    public function getName(){
        return $this->name;
    }
    public function getHP(){
        return $this->maxHP;
    }
    public function getHealth(){
        return $this->health;
    }

}



class Pikachu extends Pokemon{
    public function __construct(){
        $name = "Pikachu";
        $energyType = [new Type("Electric")];
        $maxHP = 60;
        $attack = [new Attack("Thunderbolt", 40), new Attack("Thunder Punch", 20)];
        $health = 60;
        $resistance = [new Resistance("Steel", 10)];
        $weakness = [new Weakness("Ground", 2)];
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}

class Pidgey extends Pokemon{
    public function __construct(){
        $name = "Pidgey";
        $energyType = [new Type("Flying")];
        $maxHP = 100;
        $attack = [new Attack("Wing Attack", 40), new Attack("Peck", 20)];
        $health = 100;
        $resistance = [new Resistance("Ground", 40)];
        $weakness = [new Weakness("Electric", 2)];
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}
?>