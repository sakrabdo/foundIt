<!DOCTYPE html>

<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['un'])){
    header("location:sign.php");
}
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

	
	
    <title>Found It - Add Lost Item</title>
	
	
    
    
</head>
		
<body>
<div class="wrapper">
    
                
    <header>
		<div class="safearea">

            <div class="foundit_header">
                <a href="homepage.php" class="foundit_logo"></a>

                <div class="foundit_header_mid center_left">
                    <nav>
                        <div class="nav_item nav_lost mgr50">
                            <div class="nav_title">Lost</div>
                            <div class="nav_selectBox_lost transition">
                                <a href="homepage.php" class="nav_selectOption">View Items</a>
                                <a href="addLost.php" class="nav_selectOption">Add Item</a>
                            </div>
                        </div>

                        <div class="nav_item nav_found">
                           <div class="nav_title">Found</div> 
                           <div class="nav_selectBox_found transition">
                            <a href="hpFound.php" class="nav_selectOption">View Items</a>
                            <a href="addFound.php" class="nav_selectOption">Add Item</a>
                           </div>
                        </div>
                    </nav>
                    
                </div>

                <div class="header_profile">
                <div class="header_profileName"><?php echo $_SESSION['Fname'] ?></div>
                    <img src="images/fi_profile_icon.svg" class="header_profile_icon">
                    <div class="header_profBox transition">
                        <a href="MyItems.php" class="nav_selectOption">My Items</a>
                        <a href="signout.php" class="nav_selectOption">Sign Out</a>
                    </div>
                </div>

            </div>

		</div>
    </header>
    
    
    <section style="background: url(images/gradientBlue_bg.png)">
        <div class="safearea">

            <div class="addItem_cont">   
                <div class="addItem_title">Add Your Lost Item</div>

                <form action="insertLost.php" method="POST" accept-charset="utf-8" class="addItem_form" enctype="multipart/form-data">
                    <input type="text" placeholder="Item Name..." name="add_name" required>
                    <select name="addItem_cat" required>
                        <option value="none" selected disabled hidden>Select Item Category...</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Food">Food</option>
                        <option value="Personal Belongings">Personal Belongings</option>
                        <option value="Gadgets">Gadgets</option>
                        <option value="Jewellery">Jewellery</option>
                        <option value="Vehicle">Vehicle</option>
                        <option value="Keys">Keys</option>
                        <option value="Tools">Tools</option>
                        <option value="Book">Book</option>
                        <option value="Toys">Toys</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Other">Other</option>
                    </select>

                    <input type="text" placeholder="In Which City Did You Lose It?" name="add_city" required>
                    <textarea placeholder="Enter a short description of the item..." name="add_desp" required></textarea>
                    <div class="addItem_image">
                        <label for="addimg">Upload Item Image: </label>
                        <input type="file"  class="upload_itemImage" name="addimg" id="addimg">
                    </div>

                    <span style="color:red; font-weight:600; background-color:white; fontsize 16px; margin-bottom:30px; padding:5px; border-radius:10px">
                        <?php
                         if(isset($_GET['insertL_error'])){ 
                            $e=$_GET['insertL_error'];
                            echo $e; }
                         else if(isset($_GET['insertL_success'])){
                            $s=$_GET['insertL_success'];
                            echo "<p style='background-color:lightgreen; color:rgb(19, 125, 197);font-weight:600;fontsize 16px;padding:5px; border-radius:10px;'>$s</p>"; }
                         ?>
                    </span>
    
                    <button type="submit" name="addBtn" class="signup_btn transition" style="margin-top: 20px;">Post</button>
    
                </form>

            </div> 

        </div>
    </section>
    
    <footer>
		<div class="safearea">

            <div class="footer_cont">
                <a href="homepage.php" class="foundit_logo"></a>
                <div class="footer_right">
                    <label>For User Support:</label>
                    <div class="footer_contact">
                        <img src="images/footer_phone.svg" class="footer_contact_icon">
                        <a href="callto:+961 01 234 567">+961 01 234 567</a>
                    </div>
                    <div class="footer_contact">
                        <img src="images/footer_mail.svg" class="footer_contact_icon">
                        <a href="mailto:foundit.support@hotmail.com">foundit.support@hotmail.com</a>
                    </div>
                </div>
                <div class="footer_warning center_left">Please refrain from posting useless or illegal information!</div>
            </div>

		</div>
    </footer>
		
	
	</div><!--wrapper-->    
</body>
</html>
