<?php

// class
class Produk{
    // properti
    public  $nama = "idna",
            $tema = "tema";
    // method    
    public function __construct($nama = "Belum Diisi",$tema = "Belum Diisi"){
        $this->nama = $nama;
        $this->tema = $tema;
        return "$tema dan judulnya $nama \n";
    }
}
// objek
$namaKomik = new Produk("Clash of Clans", "Game");
$namaGame = new Produk("Naruto Shipudden", "Komik");
$namaKomik1 = new Produk("Naruto Shipudden");
$namaGame2 = new Produk("Game");
$namaGame3 = new Produk();

?>