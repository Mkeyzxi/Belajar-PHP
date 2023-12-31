<?php
interface Bentuk{
    public function calculateArea();
}

abstract class Persegi{
    public $panjang;
    public function HitungLuas(){
        return $this->panjang;
    }
}
class HitungPersegi extends Persegi implements Bentuk{
    public function setPanjang($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        return "nilai dari panjang : " . $panjang .  " dan nilai lebarnya " . $lebar;
    }
    public function calculateArea(){
        return "calculate area luas : " . $this->panjang * $this->lebar . "<br>calculate area 1/2 luas : " . $this->panjang * $this->lebar / 2 . "<br>calculate area panjang : " . $this->panjang . "<br>calculate area lebar : " . $this->lebar;

        
    }
    public function HitungLuas(){
        return "ini adalah hasil hitung luas : " . $this->panjang * $this->lebar;
    }

}
$menghitungPersegi = new HitungPersegi(10);
echo $menghitungPersegi->setPanjang(11,21);
echo "<br>";
echo $menghitungPersegi->calculateArea();
echo "<br>";
echo $menghitungPersegi->HitungLuas();

?>