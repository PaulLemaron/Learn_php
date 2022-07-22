<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free web contents">
     <!--<meta http-equiv="refresh" content="15">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms.css">
    <title>Forms</title>
</head>
<body>
<div class="filling_forms">

 <form action="forms_received.php" autocomplete="on" target="_blank" method="post">
    <h1>WELCOME TO FLEMING TECHNICAL INSTITUTE</h1>
    <h2>Apply to this institution</h2>

     <label for="lname">Last Name</label> <br>
     <!--Last Name <br>-->
    <input type="text" name="lname" id="lname" placeholder=" Lorem"> <br>
    Other Names <br>
    <input type="text" name="oname" id="onames"  placeholder="John Doe"> <br>
    Date Of Birth <br>
    <input type="date" name="dbirth" id="dbirth" placeholder="Enter your Date of Birth"> <br>
    National ID Number/Birth Certificate Number <br>
    <input type="number" name="idnumber" id="idnumber" placeholder="12345645"><br>
    K.C.S.E Grade <br>
    <input type="text" name="grade" id="grade" placeholder="Enter your K.C.S.E Grade"> <br>

    <!--Creating a radio -->
    <label for="lstudies">Select Your Level of Studies</label> <br>
    <input type="radio" name="study_level" id="certificate" value="Certificate"> 
    Certificate <br>
    <input type="radio" name="study_level" id="diploma" value="Certificate"> 
    Diploma <br>
    <input type="radio" name="study_level" id="degree" value="Degree"> 
    Degree <br>
    <input type="radio" name="study_level" id="masters" value="Masters"> 
    Masters<br>
    <input type="radio" name="study_level" id="phd" value="PHD"> 
    PHD<br>

    <!--Creating a checkbox -->
    <label for="study_field">Select a field of study</label> <br>
    <input type="checkbox" name="computing" id="computing" value="School of Computing">
    
    <input type="submit" value="Submit">

</form>

</div>
</body>
</html>