<?php declare(strict_types=1);
function writeMsg(){
    echo "you are Good!";
}
writeMsg();

function carName($fname, $model){
    echo "My car is $fname Range rover. it is a  $model. <br>";
}
carName("mercedes ", "benz");
carName("toyota ","Seqoui");
carName("Aston  ", "martin");
carName("Range rover ", "vogue");

function sum(int $a,int $b){
   $x=$a+$b ;
   return $x;
}
echo "5+10= ".sum(5,10). "<br>";
echo "7+15= ".sum(7,15). "<br>";
echo "52+16= ".sum(52,16). "<br>";
echo "27+12= ".sum(27,12 ). "<br>";


?>