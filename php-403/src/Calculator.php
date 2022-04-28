<?php
    class Calculator {
        public $num1;
        public $num2;

        // public function __construct($num1, $num2) {
        //     $this->num1 = $num1;
        //     $this->num2 = $num2;
        // }

        public function add($num1,$num2) {
            return $num1 + $num2;
        }

        public function sub($num1,$num2) {
            return $num1 - $num2;
        }

        public function mul($num1,$num2) {
            return $num1 * $num2;
        }

        public function divide($num1,$num2) {
            return (float)($num1 / $num2);
        }
    }
?>