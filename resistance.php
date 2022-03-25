<?php

class Resistance extends Pokemon{
    public $resist;


protected function __construct($resist){
    $this->resist = $resist;
}
}
?>