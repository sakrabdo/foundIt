<?php
session_start();
require 'connection.php';

if(!isset($_SESSION['un'])){
     header("location:sign.php");
 }
 ?>
 <?php

$userid = $_SESSION['user_id'];



$userInfo = "select * from users where username = '$userid'";

 
$user = mysqli_query($con,$userInfo);
 
$fetchAllData = $user->fetch_all(MYSQLI_ASSOC);
 
$createTable = '<table>';
 
 
 
foreach($fetchAllData as $row)
{
	$createTable .= '<tr>';
	$createTable .= '<td> <img style="width:400px; height:300px; border-radius:20%" src="photos/'.$row['picture'].'"></td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td> <p style="color:#FACF39; margin-bottom:5px"> Name:</p>'.$row['Fname'].' '.$row['Lname'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> City:</p>'.$row['city'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="mailto:'.$row['email'].'" class="user_infoText">'.$row['email'].'</a> </td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="tel:'.$row['phone'].'" class="user_infoText">'.$row['phone'].'</a> </td>';
     $createTable .= '</tr>';	

}                     

 
$createTable .= '</table>';
 
echo $createTable;



 
?>