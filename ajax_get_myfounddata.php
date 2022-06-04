<?php
session_start();
require 'connection.php';

if(!isset($_SESSION['un'])){
    header("location:sign.php");
}
?>
<?php
$un = $_SESSION['un'];

$all = "select * from founditems where found_user='$un' ";

 
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
	$createTable .= '<td> <img style="width:100px; height:100px" src="images/'.$row['found_img'].'"></td>';
	$createTable .= '<td>'.$row['found_name'].'</td>';
	$createTable .= '<td>'.$row['found_cat'].'</td>';
	$createTable .= '<td>'.$row['found_city'].'</td>';
	$createTable .= '<td><a href="viewMyFoundItem.php?MyItemId=' .$row['foundID']. '">View Item</a></td>';
	$createTable .= '</tr>';	
}
 
$createTable .= '</table>';
 
echo $createTable;



 
?>