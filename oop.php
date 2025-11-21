<?php
class Fruit{
    public $name;
    public $color;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return   $this->name; 
    }
     function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return   $this->color; 
    }
}
$banana=new Fruit();
$banana-> set_name("Banana");
echo $banana->get_name();
$banana-> set_color("Yellow");
 echo $banana->get_color();


 echo"<br>";
 echo"Constructor:<br>";
 class Fruits{
     public $name;
     public $color;
     function  __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
     }
     function get_name(){
        return $this->name;
     }
     function get_color(){
        return $this->color;
     }
 }
 $banana = new Fruits("Apple","red");
 echo $banana->get_color();
 echo $banana ->get_name();

 echo"<br>";
 echo"Inheritance:<br>";
 class Mango{
     public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function message(){
        echo"The Fruit is {$this->name} and the color is {$this->color}.";
    }
 }
 class Cherry extends Mango{
    function get(){
        echo"The Fruit name is Cherry";
    }
 }
 $cherry=new Cherry("A","red");
 $cherry->message();
 $cherry->get();

?>
