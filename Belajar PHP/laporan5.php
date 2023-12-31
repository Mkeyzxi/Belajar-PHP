<?php

class Kendaraan {
    private $brand, $model;
    public function __construct($brand, $model){
        $this->brand = $brand;
        $this->model = $model;
    }
    protected function getBrand() {
        return $this->brand;
        
    }
    protected function getModel() {
        return $this->model;
        
    }

}
class Car extends Kendaraan{
    private $roda = 4;
    public function cetak(){
        return $str = "ini adalah Mobil yang memiliki brand : " . parent::getBrand() . " dan memiliki model : " . parent::getModel() . " roda berjumlah {$this->roda}";
    }
    
}
class Motorcycle extends Kendaraan{
    private $roda = 2;
    public function cetak(){
        return $str = "ini adalah Motor yang memiliki brand : " . parent::getBrand() . " dan memiliki model : " . parent::getModel() . " roda berjumlah {$this->roda}";
    }
}

$kendaraan = new Kendaraan("brand", "model");
$mobil = new Car("toyota", "kijang innova");
$motor = new Motorcycle("yamaha", "scoopy");


echo $mobil->cetak();
echo "<br>";
echo $motor->cetak();


?>

