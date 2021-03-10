<?php
    if(isset($_POST["submitButton"])){
        echo "Form was submitted";
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
            <img src="assets/images/logo.png" title="logo" alt="Site logo" >
            <h3>Sign Up</h3>
            <span>to continue to KANENO</span> 
            <form method="POST">
                <input type="text" name="firstname" placeholder="Frst name" required>   
                <input type="text" name="lasttname" placeholder="Last  name" required> 
                <input type="text" name="username" placeholder="Username" required>   
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="eamil2" placeholder="Confirm email" required>      
                <input type="password" name="password" placeholder="password" required>      
                <input type="password" name="password2" placeholder="Confirm password" required>   
                <input type="submit" name="submitButton" placeholder="SUBMIT">   
            </form>
            
        </div>
        
    </div>
    
</body> 
</html>
 