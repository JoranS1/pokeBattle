<?php
class Attack{
    public $attackName;
    public $damage;
    
public function __construct($attackName, $damage){
    $this->attackName = $attackName;
    $this->damage = $damage;
}

}
