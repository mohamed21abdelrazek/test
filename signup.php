<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Google</title>
</head>
<body>
    <header><h1>Register</h1></header>
    <form method="post" action="login.php">                  <!--           -->
        <?php 
        if (count($error)>0):                                //low l2h el error 2kbr mn zero
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
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="inp">
            <label>Paassword</label>
            <input type="password" name="password">
        </div>
        <div class="inp">
            <label>Confirm Paassword</label>
            <input type="password" name="con">
        </div>
        <button name="reg">Create New Account</button>
    </form>
</body>
</html>
