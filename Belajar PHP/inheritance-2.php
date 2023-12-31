<?php

// parent class
class Produk{
    public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",$harga = "Harga",
    $jmlhalaman = 0,
    $waktuMain = 0,
    $tipe;

    public function __construct($judul,$penulis,$penerbit,$harga,$jmlhalaman,$waktuMain){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlhalaman=$jmlhalaman;
        $this->waktuMain=$waktuMain;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}";
        return $str;
    }
}
// child class produk
class komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} - {$this->jmlhalaman} halaman.";
        
        return $str;
    }
}
// child class produk
class game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga} - {$this->waktuMain} jam.";
        
        return $str;
    }
}


$produk1 = new komik("Naruto","Masashi Kishimoto","Shonan Jump",30000,100,0);
$produk2 = new game("Uncharted","Neil Druckman","Siny Computer",250000,0,"50");
$produk3 = new komik("Doraemon","MbuL Ganteng","Mkeyzxi Jump",200000,100,0);
$produk4 = new game("Mobile Legends","Moonton","MbuL Computer",900000,0,"50");

echo $produk1->getInfoProduk();
echo "\n";
echo $produk2->getInfoProduk();
echo "\n";
echo $produk3->getInfoProduk();
echo "\n";
echo $produk4->getInfoProduk();


?>