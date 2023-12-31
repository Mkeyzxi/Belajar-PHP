<?php

class User{
    public $nama,$nim,$jurusan;
    public function __construct($nama = "nama",$nim = 070,$jurusan = "teknik Informatika"){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function cetak(){
        $str = "saya $this->nama dan nim $this->nim serta $this->jurusan";
        return $str;
    }
    
}

class Pengguna extends User{
    public $keunggulan;
    public function __construct($nama,$nim,$jurusan,$keunggulan = "JavaScript"){
        parent::__construct($nama,$nim,$jurusan);
        $this->keunggulan = $keunggulan;
    }
    public function cetak(){
        $str = parent::cetak() . " dan keunggulan $this->keunggulan";
        return $str;
    }
}

$mahasiswa = new User("mbul", 070, "teknik informatika");
$mahasiswa2 = new Pengguna("mbul", 170, "teknik kesehatan","Javascript");
$mahasiswa3 = new Pengguna("rezfa", 077, "ilmu informatika","php");
echo "{$mahasiswa->cetak()}";
echo "\n";
echo "{$mahasiswa2->cetak()}";
echo "\n";
echo "{$mahasiswa3->cetak()}";
// echo $mahasiswa;
// echo $mahasiswa2;
// echo "{$pengguna->cetak}";
?>