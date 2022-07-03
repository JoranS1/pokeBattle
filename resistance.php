<?php
require('attack.php');
class Resistance{
    public $resistType;
    public $restistMultiplier;


public function __construct($resistType, int $resistMultiplier){
    $this->resistType = $resistType;
    $this->restistMultiplier = $resistMultiplier;
}
}
?>