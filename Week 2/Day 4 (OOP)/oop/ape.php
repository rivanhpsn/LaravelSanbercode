<?php 
    class Ape extends Animal{
        function __construct($nama)
        {
            $this->legs = 2;
            $this->cold_blooded = false;

            $this->name = $nama;
        }
        
        public function yell(){
            echo 'Auooo';
        }

    }

?>