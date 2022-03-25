<?php
    
    class Weakness extends Pokemon{
        public $weak;

    public function __construct($weak)
    {
        $this->weak = $weak;
    }    
    }
?>