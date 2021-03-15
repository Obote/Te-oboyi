<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);

    
    if(isset($_POST["submitButton"])){
        
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["$password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["$password2"]);
        
        $account->validateFirstName($firstName);
            
    }
    
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <title>Welcome to KaNeno</title>
</head>  
<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" title="logo" alt="Site logo" >
                <h3 >Sign Up</h3> 
                <span>to continue to KANENO</span> 
            </div>
            
            <form method="POST">
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <input type="text" name="firstName" placeholder="Frst name" required>   
                <input type="text" name="lastName" placeholder="Last  name" required> 
                <input type="text" name="username" placeholder="Username" required>   
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="eamil2" placeholder="Confirm email" required>      
                <input type="password" name="password" placeholder="password" required>      
                <input type="password" name="password2" placeholder="Confirm password" required>   
                <input type="submit" name="submitButton" placeholder="SUBMIT">    
            </form>
            
            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
            
        </div>
        
    </div>
    
</body> 
</html>
 