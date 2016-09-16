<?php
    Class computer {
        public $motherboard;
        public $cpu;
        public $gpu;
        private $receipt;
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
?>