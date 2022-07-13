<?php
$a= 5;
$b= 2;
$sum= $a + $b;
$mul= $a*$b;
$div= $a/$b;
$sub= $a-$b;
$mod= $a%$b;

// Arithmetic operators
echo "the sum is: $sum";
echo "<br>";
echo "the multiplication is: $mul";
echo "<br>";
echo "the division is: $div";
echo "<br>";
echo "the modulus is: $mod";
echo "<br>";
echo "the subtraction is: $sub"; 
echo "<br>";

//assignment operators
$a+=7;
$b-=3;
echo $a;
echo "<br>";
echo $b;
echo "<br>";
function check($number){
    if ($number %2 == 0){
        echo "$number is an Even number";
    }
    else{
        echo "$number is an Odd number";
    }

}
$number=12937;
check($number);
echo "<BR>";

// conditional statements
$x=100;
$y= 70;
 if ($x=100 && $y=70){
    echo "It is crazy coding";
 }
 echo "<BR>";

 if ($x=100 || $y=70){
    echo "This is good";
 }
 echo "<BR>";
 // string concatenation
 $fname="Peter ";
 $lname="Kamotho";
 $F_Name= $fname . $lname;
 echo  " My name is: $F_Name";
 echo "<BR>";

 
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;


?>