<?php
$txt="Hello world";
$x=5;
$y=10.5;
$name="peter";
$age=18;

function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    var_dump($x);
  }
  myTest();
function childrenNames(){
    $name= "Kiddiko";
    echo "my name is $name <br>";
}
childrenNames();

function printResults(){
    $grade="A"; #local variable
    $stdName= "Digo";
    echo "Dear $stdName, your exam grade is an $grade <br>";
   # echo "$txt" #$txt is a global variable and cannot be accessed in a function
   #please remove the coment to test the accessibilty of this code
   var_dump($grade);

}
printResults();

$cars= array("Volvo", "Range-rover", "Ford");
var_dump($cars);

echo "$txt <br>";
echo  $x+$y;
echo "Hello, my name is $name, i am $age years old"
#variables scope
#GLOBAL, LOCAL, STATIC SCOPES

?>