<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
</head>
<body>
   <header><h1>HOME</h1></header>
    <section>
        <?php
         if (isset($_SESSION['x'])) {                   //lo feh variable goh el x 23mlo echo
             echo $_SESSION['x'];
         }
         if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            echo  '</section>
            <div>
                <a href="">Logout</a>
            </div>';                     //34an variable success yban mra w7da w 5las
        } else {
            header('location: login.php');
        }
        ?>
    </section>
</body>
</html>