<?php
    
    class Weakness {
        public $weakType;
        public $weakMultiplier;

    public function __construct($weakType, $weakMultiplier)
    {
        $this->weakType = $weakType;
        $this->weakMultiplier = $weakMultiplier;
    }    
    }
