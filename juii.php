<?php
echo "Switch:<br>";
$t=4;
switch($t){

    case 0:
        echo"Today is saturday";
        break;
    case 1:
         echo"Today is sunday";
         break;
    case 4:
        echo"Today is Monday";
        break;
     default:
     echo"Looking forward to the weekend";     

}
echo"<br>";
$t="brown";
switch($t){
    case "red":
        echo"favorite color is red";
        break;
    case "green":
        echo"favorite color is green";
        break;
    case "blue":
         echo"favorite color is blue";
         break;
    default:
    echo"favotite color either red ,green or blue.";             
}
echo"<br>";
$t=3;
switch($t){
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo"The weeks feels so long!";
        break;
    case 5:
    case 6:
        echo"Weekends are the best!";
        break;
    default:
    echo"Something went wrong!";

}
echo"<br>";
echo"<br>";
echo"Even and odd number using switch:<br> ";

$x=10;
switch($x%2){
    case 0:
        echo"Number is Even";
        break;
    case 1:
        echo"Number is Odd";
        break;
    default:
    echo"number is either even or odd";       
}
echo"<br>";
echo"Even and odd number using if else:<br>";
$a=15;
if($a%2==0){
    echo"number is even";
    }
else{
    echo"number is odd";
}   

echo"<br>";
echo "find out the larger number:<br>";
$a=10;
$b=15;
$c=20;
if($a>$b && $a>$c){
    echo"a is large number";
}
elseif($b>$a && $b>$c){
    echo"b is large number";
}
else{
    echo"c is large number";
}

echo"<br>";
echo"min number:<br>";
$a=min(20,59,-1,4,6);
echo $a;
echo"<br>";
echo"for loop:<br>";

//$a=1;
for($a=1; $a<=5; $a++){
    if($a==3)break;
    echo "the number is :$a<br>";
}
echo"<br>";
for($a=0; $a<=5; $a++){
    if($a==3)continue;
    echo"the number is:$a <br>";
}
?>