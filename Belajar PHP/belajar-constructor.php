<?php

class Circle{
    public $luas;
    public function __construct($luas = 10){
        $this->luas = $luas * 3.14;
        return "jari-jari berjumlah : " . $this->luas;
    }
    public function Jarijari($luas){
        echo $this->luas = $luas;
    }
}

$jari = new Circle(2);
echo "\n";
$jari = new Circle(4);
echo "\n";
$jari = new Circle();
?>