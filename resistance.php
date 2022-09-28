<?php

class Resistance{
    public $resistType;
    public $restistMultiplier;


public function __construct($resistType, $resistMultiplier){
    $this->resistType = $resistType;
    $this->restistMultiplier = $resistMultiplier;
}
}
?>