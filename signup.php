<?php
session_start();
require 'connection.php';

$signup_error='';
$signup_success='';

if (isset($_POST['signup_btn'])) {

    $un = $_POST['signup_username'];
    $checkUn= "select * from users where username='".$un."'";
    $checkresult=mysqli_query($con,$checkUn);
    $rows=mysqli_num_rows($checkresult);
    if ($rows == 1) { 
        $signup_error="Username already taken";
        header("location:sign.php?signup_error=$signup_error");
    }

    else{

        $fn = $_POST['signup_fname'];
        $ln = $_POST['signup_lname'];
        $mail = $_POST['signup_email'];
        $pass = $_POST['signup_pass'];
        $city = $_POST['signup_city'];
        $num = $_POST['signup_number'];
        $dob = $_POST['signup_dob'];

       /* $query = "insert into users values('$un', '$fn','$ln','$pass','$dob','$mail','$num', '', '$city' , '','')";
        $register=mysqli_query($con, $query);
        $signup_success="Signed up! Please Sign in to continue.";
        header("location:sign.php?signup_success=$signup_success");*/
        


        if (isset($_FILES['signup_pic'])) {
        
            $img_name = $_FILES['signup_pic']['name'];
	$img_size = $_FILES['signup_pic']['size'];
	$tmp_name = $_FILES['signup_pic']['tmp_name'];
	$error = $_FILES['signup_pic']['error'];

	if ($error === 0) {
		if ($img_size > 1000000) {
            $signup_error="File is too large.";
            header("location:sign.php?signup_error=$signup_error");
            }else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "jfif"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("pic-", true).'.'.$img_ex_lc;
				$img_upload_path = 'photos/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$query = "insert into users values('$un', '$fn','$ln','$pass','$dob','$mail','$num', '$new_img_name', '$city' , '0','1')";
        $register=mysqli_query($con, $query);
        $signup_success="Signed up! Please Sign in to continue.";
        header("location:sign.php?signup_success=$signup_success");
			}else {
                $signup_error="Only .png, .jpg, .jpeg, .jfif files are allowed.";
                header("location:sign.php?signup_error=$signup_error");
                }
		}
	}else {
        $signup_error="Unknown error occured.";
        header("location:sign.php?signup_error=$signup_error");
}
           
        }
                    
        
       


    }

}

else
header("location:sign.php");

?>