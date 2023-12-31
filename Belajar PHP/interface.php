<?php
    // interface solusinya
    class Kendaraan implements CommonMethod, BaseMethod {
        private $warna = "Merah";
        private $merk = "";
        private $harga = -1;
        private $jumlahRoda = 0;
        
        function updateHarga($harga){
            $this->harga = $harga;
        }
        
        function getHarga(){
            return $this->harga;
        }
        
        function details(){
            
        }
        
        function getOwner(){
            
        }
    }
    
    interface CommonMethod {
        public function updateHarga($harga);
        public function getHarga();
        public function details();
    }
    
    class Laptop implements CommonMethod {
        function updateHarga($harga){
            
        }
        
        function getHarga(){
            return 1;
        }
        
        function details(){
            
        }
    }
    
    interface BaseMethod {
        public function getOwner();
    }
    
    class Buku implements BaseMethod {
        function getOwner(){
            
        }
    }

    class Mobil extends Kendaraan{
        
    }
    
    class Motor extends Kendaraan{

    }
    
    class Sepeda extends Kendaraan {
        
    }
    
    $mobil = new Mobil();
    $motor = new Motor();
    $sepeda = new Sepeda();
    $laptop = new Laptop();
    echo $laptop->getHarga();

?>