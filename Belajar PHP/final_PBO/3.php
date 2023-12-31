<!-- slah karena dia maunya diset 1, satu -->

<?php
class AnimeCharakter{
    private $name;
    private $gender;
    private $spescialPower;

    public function setAnime($name, $gender, $spescialPower){
        $this->name = $name;
        $this->gender = $gender;
        $this->spescialPower = $spescialPower;
    }
    // ini yang benar
    // public function setName($name){
    //     $this->name = $name;
    // }
    // public function setGender($gender){
    //     $this->gender = $gender;
    // }public function setSpesialPowe($spescialPower){
    //     $this->spescialPower = $spescialPower;
    // }
    public function getAnime(){
        return "name : {$this->name} | gender : {$this->gender} | spescialPower : {$this->spescialPower}";
    }
}

$anime = new AnimeCharakter();
$anime->setAnime("boruto","mean","rasenggan");
echo $anime->getAnime();


?>