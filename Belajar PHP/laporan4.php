<?php
class Bentuk{
    public $warna;
    public function __construct($warna = "merah"){
        $this->warna = $warna;
    }
}

class Persegi extends Bentuk{
    public $panjang,$lebar;
    public function __construct($warna,$panjang,$lebar){
        parent::__construct($warna);
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function cetakPersegi(){
        $hasil = $this->panjang * $this->lebar;
        return "Menghitung Luas Persegi \t | warna : {$this->warna} | panjang : {$this->panjang} | lebar : {$this->lebar} | hasil : $hasil";
    }
}

class Lingkaran extends Bentuk{
    public $panjang;
    public function __construct($warna,$panjang){
        parent::__construct($warna);
        $this->panjang = $panjang;
    }
    public function cetakLingkaran(){
        $hasil = ($this->panjang*$this->panjang) * 3.14;
        return "Menghitung Luas Lingkaran \t | warna : {$this->warna} | jari-jari : {$this->panjang} | hasil : $hasil";
    } 
}

$parent = new bentuk();
$persegi = new Persegi("kuning",4,2);
$lingkaran = new Lingkaran("jingga",5);

echo $persegi->cetakPersegi();
echo "\n";
echo $lingkaran->cetakLingkaran();
?>