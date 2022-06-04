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

$user_id=$_SESSION['user_id'];

$userInfo = "select * from users where username = '$user_id'";
 
$res = mysqli_query($con,$userInfo);
 
$fetchAllData = $res->fetch_all(MYSQLI_ASSOC);
 
$createTable = '<table>';
 
 
 
foreach($fetchAllData as $row)
{
	$createTable .= '<tr>';
	$createTable .= '<td> <img style="width:400px; height:300px; border-radius:20%" src="photos/'.$row['picture'].'"></td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td> <p style="color:#FACF39; margin-bottom:5px"> Username:</p>'.$row['username'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> Password:</p>'.$row['password'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td> <p style="color:#FACF39; margin-bottom:5px"> Name:</p>'.$row['Fname'].' '.$row['Lname'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> D.o.B:</p>'.$row['dob'].'</td>';
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

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> Role:</p>'.$row['role'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> isPublished:</p>'.$row['isPublished'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="adminDeleteUser.php?Duser_id='.$user_id.'" class="item_contact transition">Delete</a> </td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="upi.php?user_pass='.$user_id.'" class="item_contact transition">Update Password</a> </td>';
     $createTable .= '</tr>';	

}
 
$createTable .= '</table>';
 
echo $createTable;



 
?>