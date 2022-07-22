<!DOCTYPE html>
<html lang="en">
<head>
    <!--<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn SuperGlobals</title>
</head>
<body>
<?php
$x = 75;
$y = 65;
function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z; 
echo "<br>";


echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

//PHP $_REQUEST
//PHP $_REQUEST is a PHP super global 
//variable which is used to collect data after submitting an HTML form.

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:
<input type="text" name="fname">
<input type="submit" value="Submit">

</form>

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_REQUEST['fname'];
    if(empty($fname)){
        echo "Name is empty";
    }else{
        echo $name;
    }

}

?>

</body>
</html>