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

$MyItemId=$_SESSION['MyItemId'];

$itemInfo = 'delete from founditems where foundID='.$MyItemId;

$res = mysqli_query($con,$itemInfo);
 
header("location:adminFound.php");

?>