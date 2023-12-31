<?php
class Kalkulator{
    public $hasil;
    public function kalkulator(){
        return "ini nilainya dan hasilnya : {$this->hasil}";
    }
}



class Penjumlahan extends Kalkulator{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1,$nilai2){
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }
    public function calculatorArea(){
        return $this->nilai1 + $this->nilai2;
    }


}
class Perkalian extends Kalkulator{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1,$nilai2){
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }
    public function calculatorArea(){
        return $this->nilai1 * $this->nilai2;
    }

    
}
class Pengurangan extends Kalkulator{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1,$nilai2){
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }
    public function calculatorArea(){
        return $this->nilai1 - $this->nilai2;
    }

    
}
class Pembagian extends Kalkulator{
    private $nilai1;
    private $nilai2;

    public function __construct($nilai1,$nilai2){
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }
    public function calculatorArea(){
        return parent::kalkulator() . $this->nilai1 / $this->nilai2;
    }

    
}


$penjumlahan = new Pembagian(1,2);
$perkalian = new Perkalian(1,2);
$pengurangan = new Pengurangan(1,2);
$pembagian = new Pembagian(1,2);

echo $penjumlahan;
echo $perkalian;
echo $pengurangan;
echo $pembagian;

?>