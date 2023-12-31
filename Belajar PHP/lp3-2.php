<?php
class Pegawai{
    public $nama,$karyawan,$gajiPokok;
    public function __construct($nama,$karyawan,$gajiPokok){
        $this->nama = $nama;
        $this->karyawan = $karyawan;
        $this->gajiPokok = $gajiPokok;
        echo "halo nama saya $this->nama, saya sebagai karyawan di : $this->karyawan, dan diberikan gaji sebesar : $this->gajiPokok \n";
    }
}

$pewagai1 = new Pegawai("Mbul","Kominfo",8000000);
$pewagai2 = new Pegawai("Lia","Rans",6000000);
$pewagai3 = new Pegawai("Kia","MKeyzxi",10000000);
$pewagai4 = new Pegawai("Laski","Home",5550000);
$pewagai5 = new Pegawai("Rexlam","Opp",6200000);
?>