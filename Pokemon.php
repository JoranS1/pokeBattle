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
    protected $weakInt;
    protected $resistInt;

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
        $this->maxHP = $this->getHealth() - $attacking;
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
    public function getAttack($attackNumber){
        return $this->attack[$attackNumber]->attackNames;
    }
}
