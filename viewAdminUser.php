    <!DOCTYPE html>
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

$_SESSION['userid']=$_GET['userid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <script src="js/jquery10.js"></script>
    <script src="js/migrate.js"></script>
	<script src="js/jquery.easing.js"></script>
    <script src="js/modernizr.custom.57033.js"></script>
	<script src="js/iscroll.js"></script>
    <script src="js/header.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap"></script>
    <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
    <script defer src="js/signmap.js"></script>

	
	
    <title>Found It - Admin User</title>
	
	
    
    
</head>
		
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script>
	$(document).ready(function(){
	
		$.ajax({
			url: 'ajax_admin_userData.php',
			success: function(data){
				$("#item_info").html(data);
			}
		});
	});
</script>

<style>
    table{
	border:0px solid transparent;
	width:100%;
}
 
table td{
	border:0px solid transparent;
    text-align:center;
	color:white;
    font-size:25px;
    font-weight:700;
	padding:10px;
}
</style>



<div class="wrapper">
    
                
<header>
		<div class="safearea">

            <div class="foundit_header">
                <a href="admin.php" class="foundit_logo"></a>

                <div class="admin_nav">
                    <a href="admin.php" class="admin_navLink hvr-underline-from-center">Lost Items</a>
                    <a href="adminFound.php" class="admin_navLink hvr-underline-from-center">Found Items</a>
                    <a href="adminUser.php" class="admin_navLink hvr-underline-from-center navActive">Users</a>
                </div>


                <div class="header_profile">
                <div class="header_profileName"><?php echo $_SESSION['Fname'] ?></div>
                    <img src="images/fi_profile_icon.svg" class="header_profile_icon">
                    <div class="header_profBox transition">
                        <a href="signout.php" class="nav_selectOption">Sign Out</a>
                    </div>
                </div>

            </div>

		</div>
    </header>
    
    
    <section class="admin_section" style="background: url(images/admin_bg.svg)">
        <div class="safearea">

            <div class="viewUser_cont">

                <div class="userInfo_cont" id="item_info">


                </div>
                
                
            </div>


        </div>
    </section>
    
		
	
	</div><!--wrapper-->    
</body>
</html>
