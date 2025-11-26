<?php
abstract class Shape{
abstract public function calculate_area();
}
class Rectangle extends Shape{
    public $length;
    public $width;
    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
    public function calculate_area(){
        return ( $this->length*$this->width);
    }
}
class Triangle extends Shape{
    public $base;
    public $height;
    public function  __construct($base,$height){
        $this->base=$base;
        $this->height=$height;
    }
    public function calculate_area(){
        return (0.5*$this->base*$this->height);
    }
}
$rectangle=new Rectangle(10,20);
echo "Rectangle area is:" . $rectangle->calculate_area()."<br>";
$triangle=new Triangle(5,6);
echo "Triangle area is:" . $triangle->calculate_area()."<br>";

?>