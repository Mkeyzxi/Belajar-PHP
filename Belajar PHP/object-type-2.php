<?php

class Produk{
    public $nama;

    public function __construct($nama = "ganteng"){
        $this->nama = $nama;
        return "nama saya {$nama}";
    }

}

class cetakNama{
    public function cetak(Produk $nama){
        return "cetak nama saya adalah : {$nama}";
    }
}

class AnakProduk extends Produk{
    public $umur = 32;
    public function cetak(){
        return "nama saya adalah {$this->nama} dan saya berusia {$this->umur}";
}
}

$nama = new Produk("mbul");
$nama1 = new cetakNama();
$anakproduk = new AnakProduk();
echo $anakproduk->cetak($nama);
echo $nama1->cetak($nama);





?>

