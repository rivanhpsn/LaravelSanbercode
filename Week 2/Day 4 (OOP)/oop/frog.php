<?php 
    class Frog extends Animal{
        function __construct($nama)
        {
            $this->legs = 4;
            $this->cold_blooded = true;

            $this->name = $nama;
        }
        
        public function jump(){
            echo 'hop hop';
        }

    }

?>