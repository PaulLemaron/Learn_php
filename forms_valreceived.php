<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms validation received</title>
</head>
<body>
       <h1>Below is your details</h1>
    <h2>My name is <?php echo $_POST["name"]; ?> <br></h2>
    <h2>This is my email: <?php echo $_POST["email"];?></h2>
    <h2>My website is: <?php echo $_POST["website"]; ?></h2>
    <h2>I wish to express the following concern:<?php echo $_POST["comment"];?> </h2>
    <h2>mimi ni: <?php echo $_POST["gender"]; ?></h2>
    

    

   
    

</body>
</html>