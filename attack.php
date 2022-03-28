<?php
class Attack extends Pokemon{
    public $name;
    public $damage;

    public function __toString()
    {
        return $this->name;
    }
public function __construct($name, $damage){
    $this->name = $name;
    $this->damage = $damage;
}
}
?>