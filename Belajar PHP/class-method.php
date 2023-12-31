<?php

class calculator
{
    public function calculateArea()
    {
        return 0;
    }
}

class Penjumlahan extends calculator
{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1, $nilai2)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }

    public function calculateArea()
    {
        return $this->nilai1 + $this->nilai2;
    }
}

class Perkalian extends calculator
{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1, $nilai2){
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }

    public function calculateArea()
    {
        return $this->nilai1 * $this->nilai2;
    }
}

class Pembagian extends calculator
{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1, $nilai2)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }

    public function calculateArea()
    {
        return $this->nilai1 / $this->nilai2;
    }
}

class Pengurangan extends calculator
{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1, $nilai2)
    {
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }

    public function calculateArea()
    {
        return $this->nilai1 - $this->nilai2;
    }
}

$jumlah = new Penjumlahan(5, 5);
$kali = new Perkalian(4, 6);
$kurang = new Pengurangan(8, 2);
$bagi = new Pembagian(20, 5);

echo "Ini adalah penjumlahan: " . $jumlah->calculateArea() . "<br";
echo "Ini adalah perkalian: " . $kali->calculateArea() . "<br";
echo "Ini adalah pengurangan: " . $kurang->calculateArea() . "<br";
echo "Ini adalah pembagian: " . $bagi->calculateArea() . "<br";

class MathOperation
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

class AdvancedMathOperation extends MathOperation
{
    public function add($a, $b)
    {
        return 2 * parent::add($a, $b);
    }
}

$basicMath = new MathOperation();
echo "ini adalah nilai dari kelas induk &ensp:" .
    $basicMath->add(5, 3) . "<br>";

$advancedMath = new AdvancedMathOperation();
echo " ini adalah nilai dari kelas induk dan turunan &ensp:" .
    $advancedMath->add(5, 3);