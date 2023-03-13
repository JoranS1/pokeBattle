<?php
//Class for the resistance of the Pokemon that contains the name and the multiplier
class Resistance{
    public $resistType;
    public $restistMultiplier;


public function __construct($resistType, $resistMultiplier){
    $this->resistType = $resistType;
    $this->restistMultiplier = $resistMultiplier;
}
}
