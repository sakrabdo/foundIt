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

if( isset($_POST["sl"])){
     $sl=$_POST["sl"];
     $qry = "select * from lostitems where lost_user in(select username from users where isPublished =1) and lost_name like'%$sl%'";
 
     $rs = mysqli_query($con,$qry);
      
     $fetchAllData = $rs->fetch_all(MYSQLI_ASSOC);
      
     $createTable = '<table>';
      
     $createTable .= '<tr>';
     $createTable .= '<th>Image</th>';
     $createTable .= '<th>Name</th>';
     $createTable .= '<th>Category</th>';
     $createTable .= '<th>City</th>';
     $createTable .= '<th>Link</th>';
     $createTable .= '</tr>';
      
      
     foreach($fetchAllData as $row)
     {
          $createTable .= '<tr>';
          $createTable .= '<td> <img style="width:100px; height:100px" src="images/'.$row['lost_img'].'"></td>';
          $createTable .= '<td>'.$row['lost_name'].'</td>';
          $createTable .= '<td>'.$row['item_cat'].'</td>';
          $createTable .= '<td>'.$row['lost_city'].'</td>';
          $createTable .= '<td><a href="viewAdminItem.php?id='.$row['lostID'].'">View Item</a></td>';
          $createTable .= '</tr>';	
     }
      
     $createTable .= '</table>';
      
     echo $createTable;
      
}else{

$all = "select * from lostitems where lost_user in(select username from users where isPublished =1)";

 
$rs = mysqli_query($con,$all);
 
$fetchAllData = $rs->fetch_all(MYSQLI_ASSOC);
 
$createTable = '<table>';
 
$createTable .= '<tr>';
$createTable .= '<th>Image</th>';
$createTable .= '<th>Name</th>';
$createTable .= '<th>Category</th>';
$createTable .= '<th>City</th>';
$createTable .= '<th>Link</th>';
$createTable .= '</tr>';
 
 
foreach($fetchAllData as $row)
{
	$createTable .= '<tr>';
	$createTable .= '<td> <img style="width:100px; height:100px" src="images/'.$row['lost_img'].'"></td>';
	$createTable .= '<td>'.$row['lost_name'].'</td>';
	$createTable .= '<td>'.$row['item_cat'].'</td>';
	$createTable .= '<td>'.$row['lost_city'].'</td>';
     $createTable .= '<td><a href="viewAdminItem.php?id='.$row['lostID'].'">View Item</a></td>';
	$createTable .= '</tr>';	
}
 
$createTable .= '</table>';
 
echo $createTable;
}


 
?>