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

if( isset($_POST["su"])){
     $su=$_POST["su"];
     $qry = "select * from users where isPublished =1 and Fname like'%$su%'";
 
     $rs = mysqli_query($con,$qry);
      
     $fetchAllData = $rs->fetch_all(MYSQLI_ASSOC);
      
     $createTable = '<table>';
      
     $createTable .= '<tr>';
     $createTable .= '<th>Picture</th>';
     $createTable .= '<th>Username</th>';
     $createTable .= '<th>First Name</th>';
     $createTable .= '<th>Last Name</th>';
     $createTable .= '<th>Link</th>';
     $createTable .= '</tr>';
      
      
     foreach($fetchAllData as $row)
     {
          $createTable .= '<tr>';
          $createTable .= '<td> <img style="width:100px; height:100px" src="photos/'.$row['picture'].'"></td>';
          $createTable .= '<td>'.$row['username'].'</td>';
          $createTable .= '<td>'.$row['Fname'].'</td>';
          $createTable .= '<td>'.$row['Lname'].'</td>';
          $createTable .= '<td><a href="viewAdminUser.php?userid='.$row['username'].'">View User</a></td>';
          $createTable .= '</tr>';	
     }
      
     $createTable .= '</table>';
      
     echo $createTable;
      
}else{

     $all = 'select * from users where isPublished=1';

 
$rs = mysqli_query($con,$all);
 
$fetchAllData = $rs->fetch_all(MYSQLI_ASSOC);
 
$createTable = '<table>';
 
$createTable .= '<tr>';
$createTable .= '<th>Image</th>';
$createTable .= '<th>Username</th>';
$createTable .= '<th>First Name</th>';
$createTable .= '<th>Last Name</th>';
$createTable .= '<th>Link</th>';
$createTable .= '</tr>';

 
foreach($fetchAllData as $row)
{
     $createTable .= '<tr>';
     $createTable .= '<td> <img style="width:100px; height:100px" src="photos/'.$row['picture'].'"></td>';
     $createTable .= '<td>'.$row['username'].'</td>';
     $createTable .= '<td>'.$row['Fname'].'</td>';
     $createTable .= '<td>'.$row['Lname'].'</td>';
     $createTable .= '<td><a href="viewAdminUser.php?userid='.$row['username'].'">View User</a></td>';
     $createTable .= '</tr>';	
}
 
$createTable .= '</table>';
 
echo $createTable;
}


 
?>