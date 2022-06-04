
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
    <script src="js/common.js"></script>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	
	
    <title>Found It</title>
	
	
    
    
</head>
		
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script>
	$(document).ready(function(){
	
		$.ajax({
			url: 'ajax_get_lost.php',
			success: function(data){
				$("#lost_data").html(data);
			}
		});
        


        $('#search_lost').click(function() {
            var input_sl = $('#input_sl').val();

            $.ajax({  
            type: "POST",  
            url: "ajax_get_lost.php", 
            data:{ 
                sl:input_sl ,  
                },
            success: function(data){
				$("#lost_data").html(data);
                }
            });
        });


	});
</script>

<style>
    table{
	border:2px solid #FACF39;
	border-collapse: collapse;
	width:100%;
}
 
table th{
	border:2px solid #FACF39;
	text-align:center;
	color:rgb(19, 125, 197);
    font-size:30px;
    font-weight:700;
	height:50px;
}
table td{
	border:2px solid #FACF39;
    text-align:center;
	color:black;
    font-size:20px;
    font-weight:700;
	padding:5px;
}
</style>




<div class="wrapper">
    
                
    <header>
		<div class="safearea">

            <div class="foundit_header">
                <a href="homepage.php" class="foundit_logo"></a>

                <div class="foundit_header_mid center_left">
                    <form action="">
                        <input type="text" id="input_sl" name="search" class="fi_header_search" placeholder="Search For Lost Items...">
                        <div class="header_searchBtn transition" id="search_lost">Search Lost</div>
                    </form> 
                    <nav>
                        <div class="nav_item nav_lost">
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

            <div class="hp_cont">
                <div class="hp_title">LOST ITEMS</div>

                <div class="hp_itemsCont" id="lost_data">

                </div>
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
