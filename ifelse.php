<?php
$age=28;
if($age<"18"){
    echo "you are under age";
}elseif($age>"18"){
    echo "you are of desired age";
}else{
    echo "you are welcomed";
}
echo "<br>";
$name ="student";
switch($name){
    case"name":
        echo "you are a student";
        break;
     case"name":
         echo "you are a parent";
         break;   
    case"name":
        echo "you are a teacher";
         break; 
    default:
    echo "you are neither a student , a parent  nor a teacher"; 
}
?>