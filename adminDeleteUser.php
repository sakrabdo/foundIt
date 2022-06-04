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

$Duserid=$_GET['Duserid'];
$Duser_id=$_GET['Duser_id'];


if(isset($_GET['Duserid'])){

$del = "UPDATE users SET isPublished='0' WHERE username='$Duserid'";

$res = mysqli_query($con,$del);
 
if($res){
     
    header("location:adminUser.php");
    }
}

if(isset($_GET['Duser_id'])){

    $del = "UPDATE users SET isPublished='0' WHERE username='$Duser_id'";
    
    $res = mysqli_query($con,$del);

    if($res){
     
    header("location:adminUser.php");
    }


    }
    


?>