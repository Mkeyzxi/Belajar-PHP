<?php

// abstract class sapaan{
//     abstract public function sayHello();
// }

// class hello extends sapaan{
//     public function sayHello(){
//         return "Hello";
//     }
// }

// $hello = new hello();
// echo $hello->sayHello();

abstract class Hewan {
    protected $nama;
    abstract public function suara();
    public function setNama($nama){
        return " nama hewan : " . $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}

class Tokek extends Hewan {
    public function suara(){
        return "Tokek";
    }
}
class Kucing extends Hewan {
    public function suara(){
        return "Kucing";
    }
}
class Anjing extends Hewan {
    public function suara(){
        return "Anjing";
    }
}


$tokek = new Tokek();
$kucing = new Kucing();
$anjing = new Anjing();

echo $tokek->suara();
echo $tokek->setNama("Mbul");
echo $tokek->getNama() . "<br>";

echo $kucing->suara();
echo $kucing->setNama("Lia");
echo $kucing->getNama() . "<br>";

echo $anjing->suara();
echo $anjing->setNama("Pitri");
echo $anjing->getNama() . "<br>";

?>