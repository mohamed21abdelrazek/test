<?php

if(!isset($_SESSION)){              //isset is detect php page is empty or not seeion open an empty page (low mfy4 variable)
    session_start();                     //session: variable to store information
}
                                      // talama mfy4 $_ yb2a variable ana el m3rfoh
$error = array();                   // decleare array variables for errror

$db =mysqli_connect('localhost','root','','supernova');            //23ml concect 3la el darabase ('localhost or server link' , 'root da global' , 'hena lo el database m3molah password bktbh', '2sm el database')



//if user clicked the button
if(isset($_POST['reg'])){               //reg dh name el botton                   (yama 2dos 3la el button lo feh variable 5odha btri2t el post{more secure})
    $user = mysqli_real_escape_string($db , $_POST['Username']);       //text name in form
    $email = mysqli_real_escape_string($db , $_POST['email']);          //mysqli_real_escape_string btmn3 el data 2nha tdi3 3n tri2 m/o/h/a/m/e/d/
    $password = mysqli_real_escape_string($db , $_POST['password']);
    $con = mysqli_real_escape_string($db , $_POST['con']);

if(empty($user)){              //lo el username empty
    array_push($error , 'Enter username');            //push two things  (el error,"el message")
}
if(empty($email)){
    array_push($error , 'Enter email');
}
if(empty($password)){
    array_push($error , 'Enter password');
}
if(empty($con)){
    array_push($error , 'Enter Confirm password');
}

if($password!=$con){
    array_push($error , 'Password not match');
}

if(count($error) ==0){
$sql = "INSERT INTO registir (username,email,password,conpassword)  Values ('$user' , '$email' , '$password','$con')";     //3rft variable w smath sql w 7tet goah code el insertion
mysqli_query($db , $sql);                //mysqli_query hea el btnfz el statements                7tet el variable el db 34an y3rf el registir dh fe database supernova
}
}                 //end the first if





// login
if(isset($_POST['login'])){
    $user = mysqli_real_escape_string($db , $_POST['Username']);       
    $password = mysqli_real_escape_string($db , $_POST['Password']);
if(empty($user)){                                                    // m4 h3rf array tany 34an homa mogden fo2{array db}   
    array_push($error , 'Enter username');            
}
if(empty($password)){
    array_push($error , 'Enter password');
}
if(count($error) ==0){
    $sql = "SELECT * FROM registir WHERE username='$user' AND password='$password' ";
    $result = mysqli_query($db , $sql);   // 3rft variable 2smh result w 7tet feh el excution bta3 el query 
                                           // h3ml if statements 34an y4of fi kol el rows
    if(mysqli_num_rows($result)==1){      //mysqli_num_rows bt5o4 goa el database w t3ml check row by row
        $_SESSION['x']=$user;            //el session momken 2st5dmha 2st5dam 25r  stor feha 7gat  (ft7t session w smtha x w vlaue bta3t x=user)
        $_SESSION['success']=" Welcome you are logged in";         //(ft7t session  smtha sucess  w vlaue bta3t x="Welcome you are logged in")
        //redirect user to homepage
        header('location:index.php');      //header 34an todyni fe page tanya{index1 mn 5lal el button}   = href in html   
    }
}
}




//logout
if(isset($_GET['logout'])){                             //3rft variable 2smh logout by5zn feh el variable el fel sf7a b get 34an hoa m4 hi store 7aga mohma fel database
    session_destroy();                                  //3mlt destroy ll variable el fel sf7a
    unset($_SESSION['x']);                              //unset ll username
    header('location:login.php');                       //yodini lsf7t el login
}
?>
