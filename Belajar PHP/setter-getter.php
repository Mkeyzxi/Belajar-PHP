<?php

class Person {
    private $name;
    private $usia;

    //setter untuk properti $name
    public function setName($name){
        //validasi atau manipulasi nilai
        $this->name = ucfirst(strtolower($name));
    }

    //getter untuk properti $name
    public function getName(){
        //manipulasi niai sebelum dikembalikan
        return "Name: ". $this->name;
    }

    //setter untuk properti $usia
    public function setUsia($usia){
        //validasi nilai(tidak boleh kurang dari 0)
        if($usia >= 0){
            $this->usia = $usia;
        } else {
            echo"Usia can't be negative.";
        }
    }

    //getter untuk properti $usia
    public function getUsia(){
        //manipulasi nilai sebelum dikembalikan
        return "usia: " . $this->usia;
    }

}
$person = new Person();
echo $person->setName("mbul");
echo $person->setUsia(19);
echo $person->getName(16);


?>