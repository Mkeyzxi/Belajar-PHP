<?php

// parent class
class Produk{
    public $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = "Harga";


    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga"){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }
}
// child komik class produk
class komik extends Produk{
    public $jmlhalaman;
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0,$jmlhalaman = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlhalaman=$jmlhalaman;
    }
    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} halaman.";
        return $str;
    }
}
// child  game class produk
class game extends Produk{
    public $waktuMain;
    public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0,$waktuMain = 0){
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain=$waktuMain;
    }
    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} jam.";
        
        return $str;
    }
}


$produk1 = new komik("Naruto","Masashi Kishimoto","Shonan Jump",30000,100);
$produk2 = new game("Uncharted","Neil Druckman","Siny Computer",250000,50);
$produk3 = new komik("Doraemon","MbuL Ganteng","Mkeyzxi Jump",200000,100);
$produk4 = new game("Mobile Legends","Moonton","MbuL Computer",900000,50);

echo $produk1->getInfoProduk();
echo "\n";
echo $produk2->getInfoProduk();
echo "\n";
echo $produk3->getInfoProduk();
echo "\n";
echo $produk4->getInfoProduk();


?>