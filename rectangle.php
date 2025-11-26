<?php
class Rectangle{
    private $length;
    private $width;
    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;

    }
    public function get_length(){
        return $this->length;
    }
    public function get_width(){
        return $this->width;
    }
    public function calculate_area(){
        return $this->length * $this->width;
    }
    public function calculate_perimeter(){
        return 2*($this->length+$this->width);
    }
}
$rectangle=new Rectangle(20,10);
echo $rectangle->calculate_area()."<br>";
echo $rectangle->calculate_perimeter();


echo"<br>";
echo"calculate circle area:<br>";
class Circle{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }
    public function get_radius(){
        return $this->radius;
    }
    public function calculate_area(){
        return pi()*pow($this->radius,2);
    }
    public function calculate_Circumference(){
        return 2*pi()*$this->radius;
    }
}
$circle=new Circle(20);
echo "Area is :" .$circle->calculate_area()."<br>";
echo "circumference is:" .$circle->calculate_Circumference();

?>