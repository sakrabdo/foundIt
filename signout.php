<?php
session_start();
require 'connection.php';
?>

<?php
	session_unset();
	session_destroy();
	header("location:sign.php");
?>