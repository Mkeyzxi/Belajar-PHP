<?php
interface Eatable{
    public function Eat();
}
abstract class Food{
    public $name;
    abstract function Describe();
}
class Fruit extends Food implements Eatable  {
    public function Eat(){
        return 'this is Fruit metode Eat';
    }
    public function Describe(){
        return ' this is Fruit metode Describe';
    }
}
class Pizza extends Food implements Eatable  {
    public function Eat(){
        return 'this is Pizza metode Eat';
    }
    public function Describe(){
        return ' this is Pizza metode Describe';
    }
}
$Apple = new Fruit();
$Margherita = new Pizza();
echo "ini adalah objek Apple : {$Apple->Eat()} | {$Apple->Describe()}<br>";
echo "ini adalah objek Margerita : {$Margherita->Eat()} | {$Margherita->Describe()}<br>";
?>