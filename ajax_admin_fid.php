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

$afid = $_SESSION['afid'];

$adminItem="select * from founditems where foundID=".$afid;
 
$res = mysqli_query($con,$adminItem);
 
$fetchAllData = $res->fetch_all(MYSQLI_ASSOC);
 
$createTable = '<table>';
 
 
 
foreach($fetchAllData as $row)
{
	$createTable .= '<tr>';
	$createTable .= '<td> <img style="width:400px; height:300px" src="images/'.$row['found_img'].'"></td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td> <p style="color:#FACF39; margin-bottom:5px"> TITLE:</p>'.$row['found_name'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> CATEGORY:</p>'.$row['found_cat'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> Lost In:</p>'.$row['found_city'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td><p style="color:#FACF39; margin-bottom:5px"> DESCRIPTION:</p>'.$row['found_desp'].'</td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="admin_delete_found.php?MyItemId='.$afid.'" class="item_contact transition">Delete</a> </td>';
     $createTable .= '</tr>';	

     $createTable .= '<tr>';
	$createTable .= '<td>  <a href="adminItemUser.php?user_id='.$row['found_user'].'" class="item_contact transition">User</a> </td>';
     $createTable .= '</tr>';	

}
 
$createTable .= '</table>';
 
echo $createTable;



 
?>