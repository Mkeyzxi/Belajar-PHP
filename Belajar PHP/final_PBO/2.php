<?php
class Anime{
    public $namaAnime, $gandre;
    public function __construct($namaAnime,$gandre){
        $this->namaAnime = $namaAnime;
        $this->gandre = $gandre;
    }
}

class KekuatanAnime extends Anime{
    private $power;
    public function __construct($namaAnime,$gandre,$power){
        $this->power = $power;
        parent::__construct($namaAnime,$gandre);
    }

    public function getAnime($power){

        return "nama anime {$this->namaAnime} dan gandrenya adalah : {$this->gandre} serta memiliki power : {$this->power}";
    }

}
$parent = new Anime("naruto","anime");
$child = new KekuatanAnime("naruto","anime","ranger");
// echo $child->namaAnime . $child->gandre . $child->power;
echo "<br>";
echo $child->getAnime("ranger");


?>