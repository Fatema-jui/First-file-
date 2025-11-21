<?php
define("laptop",["hp","dell","lenovo"]);
echo var_dump(laptop[2]);
echo"<br>";
$a=4;
if($a>7){
    echo "The number is:$a<br>";
}
else{
    echo"the number is not match the condition.";
}
echo"<br>";
$a=8;
if($a%2==0 && $a%3==0){
    echo"The number divisible by both.";
}
elseif($a%2==0){
    echo"The number divisible by 2.";
}
elseif($a%3==0){
    echo"The number divisible by 3.";
}
else{
    echo"The number is not matched the correct one.";
}

?>