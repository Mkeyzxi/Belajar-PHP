<?php

class BaseModel{
    public $baseModel = "Box model type",$nameModel = "Box model type",$uid = "",$createdAt = "11 September 2023";
    public function __construct($nameModel,$uid){
        $this->nameModel = $nameModel;
        $this->uid = $uid;
    }
    public function detailModel(){
        return "$this->nameModel, $this->uid, $this->createdAt, $this->baseModel";
    }
}

class User extends BaseModel{
    public $role;
    public function __construct($role = "tutul",$nameModel = "macan",$uid = "serigala",$createdAt = "21 Januari 2021"){
        parent::__construct($nameModel,$uid,$createdAt);
        $this->role = $role;
    }
    public function detailModel(){
        return parent::detailModel() . " $this->nameModel, $this->uid, $this->role";
    }
    public function updateRole($newRole){
        return "new role : $newRole \n";

    }
    public function getRole($role){
        $this->role = $role;
        return "role : {$role} \n";

    }
}
class Order extends BaseModel{
    public $nomorOrder,$user,$uid;

    public function __construct($nomorOrder,$user,$uid){
        parent::__construct($nomorOrder,$uid);
        $this->user = $user;
    }
    public function detailModel(){
        return parent::detailModel() . "$this->nomorOrder, $this->user, $this->uid";
    }


}

$basemodel = new BaseModel("ind","kamu");
$user = new User("indo","malay");
$order = new Order("123","mbul","2012");
echo $basemodel->detailModel();
echo "\n";
echo $user->detailModel();
echo "\n";
echo $user->updateRole("persia");
echo $user->getRole("kumang");
echo $order->detailModel();
?>