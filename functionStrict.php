<?php declare(strict_types=1);
function setHeight(int $minHeight=50){
    echo "The height is: $minHeight <br>";
}
setHeight(150);
setHeight();//picks the default.


//PHP Functions - Returning values
function sum(int $a, int $b){
    $z=$a+$b;
    return $z;
}
echo "5+10= " . sum(5,10). "<br>";
echo "6+5= " . sum(6,5). "<br>";
echo "20+10= " . sum(20,10). "<br>";

//PHP Return Type Declarations

function addFloats(float $a, float $b) :float{
    return $a+$b;
}
echo addFloats(1.2,2.5);

//Passing Arguments by Reference




?>