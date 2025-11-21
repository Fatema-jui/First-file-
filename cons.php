<?php
class Car{
    private $model;
    public function   __construct($model){
        $this->model=$model;
    }
    public function getinfo(){
        return $this->model;
    }
}
$car = new Car("BMW");
echo $car->getinfo();

echo"<br>";
class Oop{
    public function __construct(){
        echo"Welcome to php world!";
    }
    public function getinfo(){
        echo"Hello World!!";
    }
    public function __desturct(){
        echo"I am about to disappear -- bye bye!!";
    }

}
$oop=new Oop();
$oop->getinfo();
?>