<?php
//An Abstract class that makes a Pokemon 
abstract class Pokemon{
    public static $count=0; //a static variable that holds the amount of Pokemon left alive
    protected $name; //name of the pokemon
    protected $energyType; //the type of the Pokemon
    protected $maxHP; //the HP used for the damage doing
    protected $attack; //attack(s) of the Pokemon are stored here
    protected $health; // Pokemon health at the start of the battle
    protected $resistance; // variable for the resistance class
    protected $weakness; // variable for the weakness class

// the constructor for the Pokemon class
    public function __construct(string $name, $energyType, int $maxHP, int $healing,  $attack, $resistance, $weakness){
    $this->name = $name;
    $this->energyType = $energyType;
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $healing;
    $this->resistance = $resistance;
    $this->weakness = $weakness;
    self::$count++; // the count always increases with one so I used a self for it

}
// function that calculates the damage with the weakness or resistance
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
            $test = $this->resistance[0]->restistMultiplier;
            print_r("hello " . $test);
            $attacking = $attacks / $test;
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
// function that converts everything to a string
    public function __toString()
    {
        return json_encode($this);
    }
    //function to get the name of the Pokemon
    public function getName(){
        return $this->name;
    }
    //function that returns the current health of that Pokemon
    public function getHP(){
        return $this->maxHP;
    }
    //function that returns the starting health of that Pokemon
    public function getHealth(){
        return $this->health;
    }
    //function that returns the attack that the Pokemon will do
    public function getAttack()
    {
        return $this->attack;
    }
    //A function that returns the name of the attack
    public function getAttackName($attackNumber){ // getAttackName
        return $this->attack[$attackNumber]->attackName;
    }
    // a function for the calculation of the damage
    public function doDmg($attack){
        return $this->maxHP - $attack;
    }
}
