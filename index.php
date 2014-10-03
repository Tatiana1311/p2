<?php
#error_reporting(-1); # Report all PHP errors
#ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>

    <title>Password Generator</title>

    <link rel='stylesheet' href='styles.css' type='text/css'>

    <?php require ('logic.php'); ?>

</head>

<body>

    <h1> Welcome to the password generator! </h1>
	<img src="images/password_strength.png" alt="xkcd Password Strength" style="width:450px;height:350px">
	
    <form method='GET' action='index.php'>
        <h3> How many words do you want in your password? <br/>
            Please type a number from 1 to 9.
        </h3>

        <input type='text' name='numberofwords'><br>

        <p class = "checkboxes">
            <input type="checkbox" name='numbers'>Do you want a number in your password?<br>
            <input type="checkbox" name='characters'>Do you want a character in your password?<br>
        </p>
        <input type='submit' value='Generate the password'>
 
    </form>

   <!-- <p> <?php echo $_GET['numberofwords']; ?> </p>
    <p> <?php echo $_GET['numbers']; ?> </p>
    <p> <?php echo $_GET['characters']; ?> </p> -->

    <p class="passwordoutput"> <?php echo generatePassword(); ?> </p>  

</body>
</html>