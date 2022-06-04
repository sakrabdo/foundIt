<?php
session_start();
require 'connection.php';

$ar=$_SESSION['role'];

if(isset($_SESSION['un'])){
    if($ar==0)
    header("location:sign.php");
}
else
header("location:sign.php");
?>

<?php

$error='';
$userpass=$_SESSION['userpass'];


if(isset($_POST['changePass'])){


    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
   

    $matching = "SELECT * FROM users WHERE username='$userpass' ";
    $test = mysqli_query($con,$matching);
    $row = mysqli_fetch_array($test);

    if($row["password"]==$newpass){
        $error="New Password Can't Be The Same As The Old One! ";
        header("location:updatePass.php?error=$error&userpass=$userpass");
    }else{
        $userpass=$_SESSION['userpass'];
        $del = "UPDATE users SET password='$newpass' WHERE username='$userpass'";

        $res = mysqli_query($con,$del);

        $error="Password Updated!";
        header("location:updatePass.php?error=$error&userpass=$userpass");
          
     }
}

?>