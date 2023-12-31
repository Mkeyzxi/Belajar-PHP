<?php
class Persegi{
    public $panjang,$lebar;
    public function CalculateArea($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        return $panjang * $lebar;
    }
}

$rectangle1 = new Persegi(5,8);
$rectangle2 = new Persegi(10,15);

echo "rectangle 1 hasil luas adalah : " . $rectangle1->CalculateArea(5,8);
echo "<br>";
echo "rectangle 2 hasil luas adalah : " . $rectangle2->CalculateArea(10,15);
?>