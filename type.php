<?php
    // Class for the type of the Pokemon that holds the name of the Pokemon
    class Type {
        public $energyType;
        
        public function __construct($energyType)
        {
            $this->energyType = $energyType;
           
        }
    }

    //Idk why energyType needs to be a class i mean it's only the name of the type am I right