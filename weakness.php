<?php
    //Class for the weakness of the Pokemon that contains the name and the multiplier
    class Weakness {
        public $weakType;
        public $weakMultiplier;

    public function __construct($weakType, $weakMultiplier)
    {
        $this->weakType = $weakType;
        $this->weakMultiplier = $weakMultiplier;
    }    
    }
