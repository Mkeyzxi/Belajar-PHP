<?php
// class
class Produk{
    // properti
    public  $nama = "Clash of Clans",
            $tema = "Game";
    // method    
    public function getLabel(){
        return "nama produknya $this->nama dan temanya adalah $this->tema\n";
    }
}
// objek
$namaKomik = new Produk();
$namaGame = new Produk();

// manipulasi properti di objek
$namaKomik->nama = "Naruto Shipudden";
$namaKomik->tema = "Komik";

// menampilkan method
echo "ini komik : " . $namaKomik->getLabel();
echo "ini game : " . $namaGame->getLabel();



?>