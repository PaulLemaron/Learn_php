
<?php
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