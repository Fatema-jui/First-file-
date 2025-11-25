<?php
$car=array ("BMW","Volvo","Toyota");
foreach($car as &$a){
    if($a=="Volvo") $a="Audi";
    echo "car is:$a<br>";
}
echo count($car);
echo"<br>";
var_dump($car);


echo"<br>";
echo $car[0];

echo"<br>";
$car[1]="Ford";
var_dump($car);

echo"<br>";
$vehical[0] =" Bus";
$vehical[1] = "car";
$vehical[2] ="Train";
array_push($vehical,"Ford");
var_dump($vehical);
?>