<?php

    Class computer {
        public $motherboard;
        public $cpu;
        public $gpu;
        private $receipt;

        public $model_name;
        public static $minModelNameLength = 10;

        public static function validateModel_Name($model_name) {
            if(strlen($model_name) >= self::$minModelNameLength) {
                return true;
            } else {
                return false;
            }
        }

        function __construct($motherboard,$cpu,$gpu,$receipt){
            $this->motherboard = $motherboard;
            $this->cpu = $cpu;
            $this->gpu = $gpu;
            $this->receipt = $receipt;
        }
        function set_motherboard($motherboard){
            $this->motherboard = $motherboard;
        }
        function get_motherboard() {
            return $this->motherboard;
        }
        function get_cpu(){
            return $this->cpu;
        }
        function get_gpu() {
            return $this->gpu;
        }
        private function get_receipt() {
            return $this->receipt;
        }
    }
    class computer_upgrade extends computer {
        public function set_motherboard($motherboard) {
            if($motherboard == "Asus M5A97 R2.0" || "Conquerer 8A32i"){
                $this->motherboard = $motherboard;
            }
            else if($motherboard == "Asus M5A97 R2.0" || "Conquerer 8A32i") {
                computer::set_motherboard($motherboard);
            }
        }
    }
    abstract class ComputerDesign {

        public $name;
        public $color;

        public function describe() {
            return $this->name;
        }

        abstract public function makeColor();
    }

    class Excalibur extends ComputerDesign {

        public function describe(){
            return parent::describe();
        }

        public function makeColor() {
            return 'Gold';
        }
    }

    class Racer extends ComputerDesign {

        public function describe() {
            return parent::describe();
        }

        public function makeColor() {
            return 'Blue';
        }
    }

    class Titan extends ComputerDesign {
        public function describe() {
            return parent::describe();
        }
        public function makeColor() {
            return 'Iron';
        }
    }

    $computer = new Titan();
    $computer->name = 'The Titan is one of the strongest cpu\'s there is currently';

    echo $computer->describe(). '<br/>';
    echo 'It glows the color  '. $computer->makeColor(). '<br/>';



?>