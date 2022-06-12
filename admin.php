<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
</head>
<body>
    <header><h2 style="color: blue;">Admin Interface</h2></header>
    <form method="post">
        <b><label>Looking For Somthing!</label></b>
        <input type="text" name="search" placeholder="  Search By Name" autocomplete="off" required>
        <br><br>
        <input type="submit" name="submit" value=" Search Me!">
    </form>

<!-- hna h3ml el php fe nfs el sf7a m4 fe server1.php bas h3ml include l server1.php bas 34an a connect ll database -->
<?php
include'server1.php';
if(isset($_POST['submit'])){
    $st =$_POST['search'];                                            //variable ya5od el value le gowa search
    $query = "SELECT * FROM registir WHERE username='$st' " ;          //3rft variable 2smh query w 7tet goah 2mr el select
    $result= mysqli_query($db,$query);                                   ////mysqli_query hea el btnfz el statements  
if ($row = mysqli_fetch_array($result)) {       //define array variable to store all data in the row

?>

<br><br>
<center>
<table border="1">
        <tr>
            <th>Name</th><th>email</th><th>password</th>
        </tr>
       <?php
            echo"<tr>";
            echo"<td>".$row['username']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['password']."</td>";
            echo"</tr>";
       ?>
    </table>
</center>

<?php
}
else{
    echo"Name doesnt exists";
}
}
?>
</body>
</html>