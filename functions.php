<?php declare(strict_types=1);
/**A user-defined function declaration starts with the word function:

Syntax
function functionName() {
  code to be executed;
} */

function writeMsg(){
    echo "You are doing great! <br>";
}
writeMsg();

function familyName($fname, $year){
    echo "My name is $fname Kamotho. Born in the year $year. <br>";
}
familyName("Peter ", "1920");
familyName("Kranaja ","2002");
familyName("Lili ", "2008");
familyName("Wanjiru ", "2010");


function studentsGrade($Lname, $grade, $math, $english){
    echo "Student's name: $Lname, Students' overal Grade: $grade, maths Grade $math, English grade $english. <br> ";

}
studentsGrade("Florence ", "A","B","B+");
studentsGrade("Florence ", "A","B","B+");
studentsGrade("Florence ", "A","B","B+");

function addNumbers($a, $b){
    return $a + $b;
}
echo addNumbers(5, "5 days");


?>