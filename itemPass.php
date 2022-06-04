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
$user_pass=$_SESSION['user_pass'];


if(isset($_POST['changePass'])){


    $oldpass=$_POST['oldpass'];
    $newpass=$_POST['newpass'];
   

    $matching = "SELECT * FROM users WHERE username='$user_pass' ";
    $test = mysqli_query($con,$matching);
    $row = mysqli_fetch_array($test);

    if($row["password"]==$newpass){
        $error="New Password Can't Be The Same As The Old One! ";
        header("location:upi.php?error=$error&user_pass=$user_pass");
    }else{
        $user_pass=$_SESSION['user_pass'];
        $del = "UPDATE users SET password='$newpass' WHERE username='$user_pass'";

        $res = mysqli_query($con,$del);

        $error="Password Updated!";
        header("location:upi.php?error=$error&user_pass=$user_pass");
          
     }
}

?>