<?php

class Pokemon{
    public static $count=0;
    protected $name;
    protected $energyType;
    protected $maxHP;
    protected $attack;
    protected $health;
    protected $resistance;
    protected $weakness;

public function __construct(string $name, $energyType, int $maxHP, int $healing,  $attack, $resist, $weakness){
    $this->name = $name;
    $this->energyType = $energyType;
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $healing;
    $this->resistance = $resist;
    $this->weakness = $weakness;
    self::$count++;

}
public function damageCalculate($attackName , $attackingPokemon){
    	if($this->weakness[0]->weakType === $attackingPokemon->energyType){
            $attacking = $this->weakness[0]->weakMultiplier * $attackingPokemon->attack[$attackName]->damage;
            print("Its super effective");
            print_r($this->getName(). " takes " . $attacking . " damage");
        }
        else if($this->resistance[0]->resistType === $attackingPokemon->energyType){
            $attacking = $attackingPokemon->attack[$attackName]->damage - $this->resistance[0]->resistMultiplier;
            print_r("Its not very effective!");
            print_r($this->getName(). " takes " . $attacking . " damage");
        }
        else{
            $attacking = $attackingPokemon->attack[$attackName]->damage;
            print_r($this->getName(). " takes " . $attacking . " damage");
        }
        $this->maxHP = $this->maxHP - $attacking;
        print_r($this->getName(). "'s has " . $this->getHealth() . " hp left <br><br><br>");
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

    public function getAttack()
    {
        return $this->attack;
    }

    public function getAttackName($attackNumber){ // getAttackName
        return $this->attack[$attackNumber]->attackName;
    }
}
