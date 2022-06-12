<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <?php 
        if (count($error)>0):
        ?>
        <div class="error">
            <?php
            foreach($error as $error1){
                echo $error1;
                echo"<br>";
            }
            ?>
        </div>
        <?php endif ?>
        <div class="inp">
            <label>Username</label>
            <input type="text" name="Username">
        </div>
        <div class="inp">
            <label>Password</label>
            <input type="password" name="Password">
        </div>
        <button name="login">Sign IN</button>
        <div>
            <P>Not yet a member?<a href="signup.php">Sign Up</a></P>
        </div>
    </form>
</body>
</html>