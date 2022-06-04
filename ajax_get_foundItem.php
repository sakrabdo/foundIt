<?php
session_start();
require 'connection.php';

if(!isset($_SESSION['un'])){
     header("location:sign.php");
 }
 ?>
 <?php

$idfound=$_SESSION['idfound'];



$itemInfo = "select * from founditems where foundID=".$idfound;

 
$res = mysqli_query($con,$itemInfo);
 
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
	$createTable .= '<td>  <a href="user.php?user_id='.$row['found_user'].'" class="item_contact transition">Contact</a> </td>';
     $createTable .= '</tr>';	

}
 
$createTable .= '</table>';
 
echo $createTable;



 
?>