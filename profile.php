<?php
require_once("includes/header.php");
?>

<div class="settingsContainer column">
   
    <div class="formSection">
        
        <form method="POST">
        
            <h2>User details</h2>

            <?php
                $user = new User($con, $userLoggedIn);

                $firstName = isset($_POST["firstName"]) ? strip_tags($_POST["firstName"]) : $user->getFirstName();
                $lastName = isset($_POST["lastName"]) ? strip_tags($_POST["lastName"]) : $user->getLastName();
                $email = isset($_POST["email"]) ? strip_tags($_POST["email"]) : $user->getEmail();
            ?>

            <input type="text" name="firstName" placeholder="First name" value="<?php echo $firstName; ?>">
            <input type="text" name="lastName" placeholder="Last name" value="<?php echo $lastName; ?>">
            <input type="email" name="email" placeholder="Email"  value="<?php echo $email; ?>">
            <input type="submit" name="saveDetailsButton" value="Save">
        </form>

    </div>

    <div class="formSection">
        
        <form method="POST">
        
            <h2>Update password</h2>

            <input type="password" name="oldPassword" placeholder="Old password">
            <input type="password" name="newPassword" placeholder="New password">
            <input type="password" name="newPassword2" placeholder="Confirm new password">
            <input type="submit" name="savePasswordButton" value="Save">
        </form>

    </div>

</div>