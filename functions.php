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

public function __construct(string $name,  $energyType, int $maxHP, $healing, $attack, $resist, $weak, ){
    $this->name = $name;
    $this->energyType = new Type($energyType);
    $this->maxHP = $maxHP;
    $this->attack = $attack;
    $this->health = $healing;
    $this->resistance = $resist;
    $this->weakness = $weak;
    self::$count++;

}

}

class Pikachu extends Pokemon{
    public function __construct(){
        $name = "Pikachu";
        $energyType = new Type("Electric");
        $maxHP = 60;
        $attack = [new Attack("Thunderbolt", 40), new Attack("Thunder Punch", 20)];
        $health = 60;
        $resistance = new Resistance("Steel", 10);
        $weakness = new Weakness("Ground", 2);
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}

class Pidgey extends Pokemon{
    public function __construct(){
        $name = "Pidgey";
        $energyType = new Type("Flying");
        $maxHP = 100;
        $attack = [new Attack("Wing Attack", 40), new Attack("Peck", 20)];
        $health = 100;
        $resistance = [new Resistance("Ground", 40)];
        $weakness = [new Weakness("Eletric", 2)];
        parent::__construct($name, $energyType, $maxHP, $health, $attack, $resistance, $weakness);

    }
}
?>