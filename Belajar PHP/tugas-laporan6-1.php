<?php
interface Bentuk{
    function calculateArea();
}
class Lingkaran implements Bentuk{
    private $jarak;
    public function __construct($jarak){
        $this->jarak = $jarak;
    }
    public function calculateArea(){
        return 3.14 * ($this->jarak * $this->jarak);
    }
}

$luasLingkaran = new Lingkaran(20);
$luasLingkaran2 = new Lingkaran(14);
echo "Luas Lingkaran : " . $luasLingkaran->calculateArea() . "<br>";
echo "Luas Lingkaran : " . $luasLingkaran2->calculateArea();
?>

