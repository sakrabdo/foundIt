<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['un'])){
    header("location:sign.php");
}
?>
<?php


if (isset($_POST['addBtn'])) {

    $insertF_error='';
    $insertF_success='';

    $un = $_SESSION['un'];
    $in = $_POST['add_name'];
    $icat = $_POST['addItem_cat'];
    $ic = $_POST['add_city'];
    $idesp = $_POST['add_desp'];  

    if(isset($_FILES['addimg'])) {
        
        $img_name = $_FILES['addimg']['name'];
        $img_size = $_FILES['addimg']['size'];
        $tmp_name = $_FILES['addimg']['tmp_name'];
        $error = $_FILES['addimg']['error'];

        if ($_FILES['addimg']['error'] === 0) {

            if ($img_size > 1000000) {
                $insertF_error="File is too large.";
                header("location:addFound.php?insertF_error=$insertF_error");
            }
            else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png", "jfif"); 

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("founditem", true).'.'.$img_ex_lc;
                    $img_upload_path = 'images/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    // Insert into Database
                    $query = "insert into founditems values('', '$in','$icat','$idesp','$ic','$new_img_name','$un')";
                    $register=mysqli_query($con, $query);
                    $insertF_success="Item Was Posted!";
                    header("location:addFound.php?insertF_success=$insertF_success");
                }
                else {
                    $insertF_error="Only .png, .jpg, .jpeg, .jfif files are allowed.";
                    header("location:addFound.php?insertF_success=$insertF_success");
                }
            }

        }
        else {
            $insertF_error="Unknown error occured.";
            header("location:addFound.php?insertF_success=$insertF_success");
        }       
    }

}
?>