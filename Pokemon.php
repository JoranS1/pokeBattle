<?php

abstract class Pokemon{
    public static $count=0;
    protected $name;
    protected $energyType;
    protected $maxHP;
    protected $attack;
    protected $health;
    protected $resistance;
    protected $weakness;

public function __construct(string $name, $energyType, int $maxHP, int $healing,  $attack, $resistance, $weakness){
    $this->name = $name;
    $this->energyType = $energyType;
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $healing;
    $this->resistance = $resistance;
    $this->weakness = $weakness;
    self::$count++;

}
public function damageCalculate($attackName , $attackingPokemon){
        $attacks =  $attackingPokemon->attack[$attackName]->damage;
        $resist =  $this->resistance[0]->resistMultiplier;
    	if($this->weakness[0]->weakType === $attackingPokemon->energyType){
            $attacking =  $attackingPokemon->attack[$attackName]->damage * $this->weakness[0]->weakMultiplier;
            print("Its super effective <br><br><br>");
            print_r($this->getName(). " takes " . $attacking . " damage <br><br><br>");
            $this->maxHP = $this->doDmg($attacking);
        }
        else if($this->resistance[0]->resistType === $attackingPokemon->energyType){
            $attacking = $attacks * $this->resistance[0]->resistMultiplier;
            print_r($attacks . "<br><br><br>");
            print_r($this->resistance[0]->resistMultiplier . "<br><br><br>");
            print_r("Its not very effective!");
            print_r($this->getName(). " takes " . $attacking . " damage <br><br><br>");
            $this->maxHP = $this->doDmg($attacking);
        }
        else{
            $attacking = $attackingPokemon->attack[$attackName]->damage;
            print_r($this->getName(). " takes " . $attacking . " damage <br><br><br>");
            $this->maxHP = $this->doDmg($attacking);
        }
        print_r($this->getName(). "'s has " . $this->getHP() . " hp left <br><br><br>");
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
    public function doDmg($attack){
        return $this->maxHP - $attack;
    }
}
