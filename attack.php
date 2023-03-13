<?php
// the attack class that holds 2 variables the name of the attack and the damage
class Attack{
    public $attackName;
    public $damage;
    
public function __construct($attackName, $damage){
    $this->attackName = $attackName;
    $this->damage = $damage;
}

}
