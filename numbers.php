<?php
$x=5985;
var_dump(is_int($x));
echo "<br>";
$y=59.85;
var_dump(is_int($y));
echo "<br>";
var_dump(is_float($y));
echo "<br>";
$x=acos(8);
var_dump($x);
echo "<br>";
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello";
var_dump(is_numeric($x))




?>