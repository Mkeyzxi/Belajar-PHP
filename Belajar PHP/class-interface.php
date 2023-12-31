<?php

// interface Sapaan {
//     public function sayHello();
// }
// class Hello implements Sapaan{
//     public function sayHello(){
//         return "Hello";
//     }
// }

// $hello = new Hello();
// echo $hello->sayHello() . " mbul ganteng";


interface Bentuk{
    public function calculateArea();
}

class Persegi implements Bentuk{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function calculateArea(){
        return $this->sisi*$this->sisi;
    }
}

$persegi = new Persegi(4);
echo "luas persegi: ". $persegi->calculateArea(). "<br>";

?>