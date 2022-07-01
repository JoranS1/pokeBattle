<?php
    require('resistance.php');
    require('weakness.php');

    class Type {
        public $energyType;
        public $weakness;
        public $resistance;

        public function __construct($energyType, $weak, $resist)
        {
            $this->energyType = $energyType;
            $this->weakness = new Weakness($weak);
            $this->resistance = new Resistance($resist);
        }
        public function electric(){
            if($this->energyType === 'Rock'){
                return 1.5;
            }
            elseif($this->energyType === 'Grass'){
                return 0.5;
            }
            else{
                return 1;
            }
        } 
        public function flying(){
            if($this->energyType === 'Electric'){
                return 1.5;
            }
            elseif($this->energyType === 'Bug'){
                return 0.5;
            }
            else{
                return 1; 
            }
        }
    }
?>