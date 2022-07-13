<!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Loops</title>
</head>
<body>
<?php
/*The while loop executes a block of code as long as the specified condition is true.=
Syntax
while (condition is true) {
  code to be executed;
}*/

$x=1;
while($x<=100){
    echo "The number is: $x <br>";
    $x+=15;
}
/*The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

Syntax
do {
  code to be executed;
} while (condition is true);*/
$y=6;
do{
    echo "The number is: $y <br>";
    $y++;
}while($y<=5);
/*The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}*/
for($i=10;$i>=0;$i-=5){
    echo "The number is: $i <br>";
}

/**The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
  code to be executed;
}
For every loop iteration, the value of the current array element is
 assigned to $value and the array pointer is moved by one,
  until it reaches the last array element. */

$colors=array("Red","Blue","Black");
foreach ($colors as $value){

    echo "$value <br>";
}
$age= array("Peter" =>"35","Kamotho" =>"30","Paul" =>"33");
foreach($age as $name => $AGE){

    echo "$name=$AGE <br>";

}
?>
</body>
</html>