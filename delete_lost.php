<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['un'])){
    header("location:sign.php");
}
?>
<?php

$MyItemId=$_SESSION['MyItemId'];

$itemInfo = 'delete from lostitems where lostID='.$MyItemId;

$res = mysqli_query($con,$itemInfo);
 
header("location:MyItems.php")

?>