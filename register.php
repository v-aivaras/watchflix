<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Watchflix</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <link rel="icon" href="assets/images/favicon.ico">
    </head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <a href="index.php">
                        <img src="assets/images/logo.png" title="Logo" alt="Site logo" />
                    </a>
                    <h3>Sign Up</h3>
                    <span>to continue to Watchflix</span>
                </div>

                <form method="POST">

                    <input type="text" name="firstName" placeholder="First name" required>

                    <input type="text" name="lastName" placeholder="Last name" required>

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

            </div>

        </div>

    </body>
</html>