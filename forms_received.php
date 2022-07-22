<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms received</title>
</head>
<body>
       <h1>Below is your application details</h1>
    <h2>Welcome <?php echo $_POST["lname"]; ?> <br></h2>
    <h2>Your other name is: <?php echo $_POST["oname"];?></h2>
    <h2>Your Date of Birth is: <?php echo $_POST["dbirth"]; ?></h2>
    <h2>Your National ID Number is:<?php echo $_POST["idnumber"];?> </h2>
    <h2>Your KCSE Grade is: <?php echo $_POST["grade"]; ?></h2>
    <h2>You are applying for a: <?php echo $_POST ["study_level"]; ?></h2>

    

   
    

</body>
</html>