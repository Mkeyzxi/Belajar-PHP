<?php
class circle{
    public $jari_jari;
    
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
        echo "jari jari $jari_jari";
    }

    public function getluas($jari_jari){
        return $this->jari_jari = $jari_jari * 3.14;
    }
}

$lingkaran = new circle();

echo $lingkaran->getluas(3);