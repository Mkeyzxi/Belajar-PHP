<?php
// class Hewan {
//     public function suara(){
//         return 'twi  it';
//     }
// }
// class Burung extends Hewan{
// }
// $burung = new Burung();
// echo $burung->suara();

// class Mobil {
//     public $merek = "indonesia";
//     public $tahunProduksi = 12;
//     public function ini($merek, $tahunProduksi = 12) {
//     $this->merek = $merek;
//     $this->tahunProduksi = $tahunProduksi;
//     return $merek . " dan " . $tahunProduksi;
//     }
// }
// //     $mobil = new Mobil();
// //     echo $mobil->ini("kamu");
// $mobil = new Mobil();
// echo $mobil->merek . " dan " . $mobil->tahunProduksi;


interface Shape{
    public function hitungLuas();
}
class Persegi implements Shape{
    private $phi = 3.14;
    private $jari = 14;
    public function __construct($phi,$jari){
        $this->phi = $phi;
        $this->jari = $jari;
    }
    public function hitungLuas(){
        return $this->phi * $this->phi + $this->jari;
    }
}
class Lingkaran implements Shape{
    private $longar = 3.14;
    private $jari = 14;
    public function __construct($longar,$jari){
        $this->longar = $longar;
        $this->jari = $jari;
    }
    public function hitungLuas(){
        return $this->longar + $this->longar + $this->jari;
    }
        
}
$lingkaran = new Lingkaran(24,11);
$persegi = new Persegi(12,32);
echo $lingkaran->hitungLuas();
echo "<br>";
echo $persegi->hitungLuas();

?>

