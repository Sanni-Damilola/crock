<?php session_start(); ?>


<?php
session_start();
if(isset($_SESSION['username'])){


 include "config.php";
   $username = $_SESSION["username"];


   $user_behaviour = mysqli_real_escape_string($con, htmlspecialchars($_POST['user_behaviour']));

   $ads = mysqli_real_escape_string($con, htmlspecialchars($_POST['ads']));



  $xd = "UPDATE `settingsusers` SET `user_behaviour` = '$user_behaviour', `ads` = '$ads' WHERE `username` = '$username'";
        $rd = mysqli_query($con, $xd);
        if($rd){

        	echo '<font color="green"><b>Settings saved</b></font>';
    
        }














}else{
	



	echo '<script>

    window.location.href="../"

    </script>';
}














?>