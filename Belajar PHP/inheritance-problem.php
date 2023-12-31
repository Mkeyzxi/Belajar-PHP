<?php

class Produk{
    public $judul = "Judul",$penulis = "Penulis",$penerbit = "Penerbit",$harga = "Harga",$jmlhalaman = 0,$waktuMain = 0,$tipe;
    public function __construct($judul,$penulis,$penerbit,$harga,$jmlhalaman,$waktuMain,$tipe){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
        $this->jmlhalaman=$jmlhalaman;
        $this->waktuMain=$waktuMain;
        $this->tipe=$tipe;
    }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}";
        if($this->tipe == "Komik"){
            $str.= " - {$this->jmlhalaman} halaman";
        }else if($this->tipe == "Game"){
            $str.= " - {$this->waktuMain} jam";
        }
        
        return $str;
    }
}

class cetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonan Jump",30000,100,0,"Komik");
$produk2 = new Produk("Uncharted","Neil Druckman","Siny Computer",250000,0,"50","Game");

echo $produk1->getInfoLengkap();
echo "\n";
echo $produk2->getInfoLengkap();


?>