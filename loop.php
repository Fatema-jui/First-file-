<?php
$colors=array("red","green","bule","yellow");
foreach ($colors as $a){
    echo "$a <br>";
}
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
echo"<br>";
$members=array("peter"=>"35","jui"=>23, "fatema"=>"25");
foreach($members as $a=>$b){
    echo "$a:$b<br>";
}
echo"break statement:<br>";
$name=array("jui","fatema","putul");
foreach($name as $a){
    if($a=="fatema") break;
    echo"name:$a <br>";
}
echo"continue statement:<br>";
$name= array("jui","fatema","putul");
foreach($name as $a){
    if($a =="fatema") continue;
    echo"name is :$a <br>";
}
echo"<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

echo"foreach loop byreference:<br>";
$colors=array ("red","green","blue","yellow");
foreach($colors as &$a){
    if($a=="blue") $a="pink";
}
var_dump($colors);

echo"function:<br>";
function myclass($name,$year){
    echo "name is :$name . Age is:$year<br>";
}
myclass("jui",21);
?>
