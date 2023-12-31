<?php

// class
class Produk{
    // properti

    public  $nama,
            $tema,
            $durasi,
            $harga;

    // method    
    public function __construct($nama = "Belum Diisi",$tema = "Belum Diisi",$durasi = "0 second", $harga = 0){
        $this->nama = $nama;
        $this->tema = $tema;
        $this->harga = $harga;
        $this->durasi = $durasi;
        return "$tema dan judulnya $nama harga $harga serta memiliki durasi $durasi\n";
    }
}
// class object type
class cetakinfoProduk{
    public function cetak(Produk $produk){
        $string = "{$produk->tema} || {$produk->nama} || {$produk->durasi} || {$produk->harga} \n";
        return $string;
    }
}

// objek
$namaKomik = new Produk("Clash of Clans", "Game", "20 Menit", 70000);
$namaGame = new Produk("Naruto Shipudden", "Komik", "30 Menit", 70000);
$infoProduk = new cetakinfoProduk();

echo $infoProduk->cetak($namaKomik);
echo $infoProduk->cetak($namaGame);




?>