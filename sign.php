<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php
session_start();
require 'connection.php';

$error=''; 
	if (isset($_POST['signin_btn'])) {
	if (empty($_POST['signin_username']) || empty($_POST['signin_pass'])) {
		$error="Username or Password empty";
	}else{
		$username=$_POST['signin_username'];
		$password=$_POST['signin_pass'];			
		
		
		$q="select * from users where username='".$username."' 
		AND password='".$password."'";
		$result=mysqli_query($con,$q);
		$rows=mysqli_num_rows($result);
		if ($rows == 1) { 
			$r =  mysqli_fetch_array($result);
			$fn = $r['Fname'];
			$_SESSION['Fname']=$fn;
            $_SESSION['un']=$username;
            $role=$r['role'];
            $_SESSION['role']=$role;

            if($r['role']==0){
			    header("location:homepage.php"); 
            }else{
			    header("location: admin.php");
            }
		} else {
			$error = "Username or Password is invalid";
		}
		
	}
}

?>



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
	
    <title>Found It - Sign in/up</title>
	
	
    
    
</head>
		
<body>
<div class="wrapper">
    
      <div class="sign_container">
        
        <div class="sign_forms_container">  
            <img src="images/foundit_logo.svg"/>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">

                <div class="signin_form">
                    <label>Sign In</label>
                    <input type="text" name="signin_username" placeholder="Username..." id="sign_username">
                    <input type="password" name="signin_pass" placeholder="Password...">
                    <span style="color:red; font-weight:600; background-color:white; fontsize 16px; margin-bottom:5px; padding:5px; border-radius:10px">
                        <?php echo $error; ?>
                    </span> 
                    <button type="submit" class="signBtn transition" name="signin_btn" id="signBtn" >Sign In</button>
                </div>
            </form>    

            


            <form action="signup.php" method="post" accept-charset="utf-8" class="signup_form" enctype="multipart/form-data">
                <label>Sign Up</label>

                <span style="color:red; font-weight:600; background-color:white; fontsize 16px; margin-bottom:30px; padding:5px; border-radius:10px">
                        <?php
                         if(isset($_GET['signup_error'])){ 
                            $e=$_GET['signup_error'];
                            echo $e; }
                         else if(isset($_GET['signup_success'])){
                            $s=$_GET['signup_success'];
                            echo "<p style='background-color:lightgreen; color:rgb(19, 125, 197);font-weight:600;fontsize 16px;padding:5px; border-radius:10px;'>$s</p>"; }
                         ?>
                </span>


                <div class="signup_inputCont">
                    <input type="text" name="signup_username" placeholder="Username..." required>
                    <input type="text" name="signup_fname" placeholder="First Name..." required>
                    <input type="text" name="signup_lname" placeholder="Last Name..." required>
                    <input type="email" name="signup_email" placeholder="Email..." required>
                    <input type="password" name="signup_pass" placeholder="Password..." required>
                    <input type="text" name="signup_city" placeholder="City..." required>
                    <input type="number" name="signup_number" placeholder="Phone Number..." required> 
                    <input type="date" name="signup_dob" required>
                </div>

                <div class="sign_profilePhoto">
                    <label for="profilePhoto">Choose Profile Photo: </label>
                    <input type="file" name="signup_pic" required>
                </div>
                
                <button type="submit" class="signup_btn transition" name="signup_btn"  >Sign Up</button>


            </form>

        
         

        </div>  

      </div>          


</div><!--wrapper-->    


</body>
</html>

