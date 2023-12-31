<?php

class Kubus{
    public $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function cetak($sisi){
        return "Nilai dari sisi: " . $this->sisi;
    }
}

class Sisi1 extends Kubus{
    public $sisi1;

    public function __construct($sisi1){
        $this->sisi1 = $sisi1;
    }
}

class Sisi2 extends Kubus{
    public $sisi2;

    public function __construct($sisi2){
        $this->sisi2 = $sisi2;
    }
    public function Kubus {
        $this->sisi2 = $sisi2;
        parent::cetak($sisi2);
    }
}
    $kubusku = new Kubus(2);
    
    echo "Nilai dari sisi: " . $kubusku->sisi . PHP_EOL;
    echo "Volume kubus: " . $kubusku->hitungVolume() . PHP_EOL;
    
    ?>
