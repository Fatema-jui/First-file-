<?php

echo "Hello World !!";
echo "<br>";
echo "php";
echo "<br>";
echo "Welcomr to my program.</br>";

echo "<br>";
echo " Arithmetic Operators:";
$x=5;
$y=10;
$add=($x+$y);
echo "<br>";
echo $add;
echo "<br>";
$sub=($x-$y);
echo $sub;


echo"<br>";
echo "Assignment Operators:</br>";

$x = 30;  
echo $x;

echo"<br>";
$x=10;
$y=30;
$x+=$y;
echo $x;
echo"<br>";
echo "multiplication". $x*=$y;
echo"<br>";
echo"Comparison Operators:<br>";
$x=100;
$y=200;
var_dump($x===$y);
echo"<br>";
echo"Increment & Decrement:";
$x=10;
echo ++$x;
echo"<br>";

echo"Logical Operator:<br>";
$x=10;
$y=30;
if($x==10 && $y==30){
    echo "Hello World";
}
echo"<br>";
echo"Array operator:<br>";
$x = array("a" => "brown", "b" => "green");  
$y = array("c" => "red", "d" => "yellow");  

var_dump($x === $y);
echo"<br>";
echo"<br>";
echo"if , if---elseif conditon:<br>";
//Output "Have a good day!" if $t is less than 20:
    $x=10;
    if($x<20){
        echo "Have a good day!";
    }


?>