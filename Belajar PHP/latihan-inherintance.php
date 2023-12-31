<?php

class Produk{
    public $merek,$harga,$warna;

    public function __construct($merek,$harga,$warna){
        $this->merek=$merek;
        $this->harga=$harga;
        $this->warna=$warna;
    }

    public function info(){
        return "$this->merek Harga : $this->harga | $this->warna ";
    }

    

}

class Sepatu extends Produk{
    public $warna;

    public function __construct($merek,$harga,$warna){
        parent::__construct($merek,$harga,$warna);
    }
    public function info(){
        return parent::info() . " warna sepatu.";
    }
}
class Helm extends Produk{

    public function __construct($merek,$harga,$warna){
        parent::__construct($merek,$harga,$warna);
        $this->warna=$warna;
    }
    public function info(){
        return parent::info() . " warna helm.";
    }
}

$produk = new Produk("Lamborgini", 1000000, "jingga");
$helm = new Helm("helm : ", 1300000, " kuning");
$sepatu = new Sepatu("sepatu : ", 1200000, " merah");

// echo $produk->info();
echo "\n";
echo $helm->info();
echo "\n";
echo $sepatu->info();
echo "\n";
$helm->harga += $sepatu->harga;
echo "harga helm dan sepatu : " . $helm->harga;
?>








