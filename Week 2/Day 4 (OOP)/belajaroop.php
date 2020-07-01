<?php
//class
class robot{
    //property
    public $suara;
    public $berat = 30;

    public function __construct($suara){
        $this->suara = $suara;
    }
    
    public function set_suara($suara){
        $this->suara = $suara;
    }

    public function get_suara(){
        return $this->suara;
    }

    // public function bersuara(){
    //     echo 'speak : '.$this->suara;
    // }
    // public function berat(){
    //     return $this->berat;
    // }
    
};

class robot_hewan extends robot {
    public function get_kekuatan(){
    echo 'I am Grimlock';
    }
}


?>