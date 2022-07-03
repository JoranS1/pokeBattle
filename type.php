<?php
    require('resistance.php');
    require('weakness.php');

    class Type {
        public $energyType;
        public $weakness;
        public $resistance;
        public $weakInt;
        public $resistInt;
        public function __construct($energyType)
        {
            $this->energyType = $energyType;
           
        }
    }
?>