<?php

class Boxmodel{
    public $boxModel;
    public $nameModel;
    public $uid;
    public $createAt;

    public function __construct($boxModel  = "box model type",$nameModel = "box model type",$uid = "1029",$createAt = "11 sep 2023"){
        $this->boxModel = $boxModel;
        $this->nameModel = $nameModel;
        $this->uid = $uid;
        $this->createAt = $createAt;
        $print = "box model : $boxModel, name model : $nameModel, uid : $uid, dibuat : $createAt ";
        echo $print;
        
    }
    publ
}

class Order extends Boxmodel {
    public $nameOrder,$user;
    public function detailOrder($nameOrder = "kamu",$user = "mbul"){
        $this->nameOrder = $nameOrder;
        $this->user = $user;
        $print = "name order $nameOrder, user $user, uid $this->uid";
        echo $print;
    }
}

class User extends Boxmodel {
    public $vole,$user;
    public function detailUser($vole = "indonseia",$user = "mbul"){
        $this->vole = $vole;
        $this->user = $user;
        $print = "vole $vole, user $user, uid $this->uid";
        echo $print;
    }
}


$parent = new Boxmodel("box model type","name model", "20102", "11 September 2023");
echo "\n";
$order = new Order("indonesia");
echo "\n";
$user = new User("malaysia","singapura");

// echo $parent->boxModel();
// echo "\n";
// echo $order->detailOrder();
// echo "\n";
// echo $user->detailUser();






?>