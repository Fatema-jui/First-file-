<?php
class Calculator{
    public $num1;
    public $num2;
    public function __construct($num1,$num2){
        $this->num1=$num1;
        $this->num2=$num2; 
    }
    public function add(){
    return $this->num1+$this->num2;
    }
    public function sub(){
        return $this->num1-$this->num2;
    }

}
$calculator=new Calculator(10,20);
echo $calculator->add();
echo"<br>";
echo $calculator->sub();

echo"<br>";
class Animal{
    public $name;
    public $skin_color;
    public $height;
    public function __construct($name,$skin_color,$height){
        $this->name=$name;
         $this->skin_color=$skin_color;
          $this->height=$height;
    }
    public function getinfo(){
        echo"The Animal name is {$this->name} ,Skin_color is {$this->skin_color} and height is {$this->height}.";
    }
}
class Dog extends Animal{
    
}
$dog=new Dog("doggy","Black","4");
$dog->getinfo();
   
echo"<br>";

class Bankaccount{
    public $name;
    public $id;
    private $balance;
    public function __construct($id,$name,$balance){
        $this->id=$id;
          $this->name=$name;
            $this->balance=$balance;
    }
    /*public  function set_name(){
        $this->name=$name;
    }
    public function get_name(){
        return $this->name;
    }*/
    public function deposit($amount){
        $this->balance+=$amount;
    }
    public function getbalance(){
       return $this->balance;
    }
}
$bankaccount1=new Bankaccount(1,"jui",1000);
$bankaccount1->deposit(500);
echo $bankaccount1->getbalance();
?>