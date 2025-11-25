<?php
class Car{
    public $brand;
    public $model;
    public function __construct($model,$brand){
        $this->brand=$brand;
        $this->model=$model;
    }
    public function info(){
        echo"The car model is {$this->model}. and the brand is {$this->brand}";
    }
}
$car=new Car("X5","BMW");
$car->info();
?>