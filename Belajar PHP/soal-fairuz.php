<?php



class Kubus{
        public $sisi;
        public function __construct($sisi){
            $this->sisi = $sisi;
        }
        public function cetak($sisi){
            return "nilai dari sisi " . $sisi;
        }
    }

    class Sisi1 extends Kubus{
        public $sisi1;
        public function __construct($sisi1 = 5){
            $this->sisi1 = $sisi1;
        }
        public function cetakSisi1($sisi1){
            $this->sisi1 = $sisi1;
            return parent::cetak($sisi1) . "| 1 nilai";
        }
    }
    class Sisi2 extends Kubus{
        public $sisi2;
        public function __construct($sisi2){
            $this->sisi2 = $sisi2;
        }
        public function cetakSisi2($sisi2){
            $this->sisi2 = $sisi2;
            return parent::cetak($sisi2) . "| 2 nilai";
        }
    }
    class volumeKubus extends Kubus{
        public $kubus;
        public function __construct($kubus){
            $this->kubus = $kubus;
            
        }
        public function nilaiKubus($kubus){
            $this->kubus = $kubus;
            $kubus *=3;
            return "hasil dari volume kubus : $kubus";
        }
        
    }

    $parent = new Kubus(2);
    $child1 = new Sisi1(5);
    $child2 = new Sisi2(5);
    $child3 = new volumeKubus(5);

    // echo $parent->cetak();
    echo $child1->cetakSisi1(5);
    echo "\n";
    echo $child2->cetakSisi2(4);
    echo "\n";
    echo $child3->nilaiKubus(4);
    ?>