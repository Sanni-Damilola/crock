<?php session_start(); ?>


<?php

session_start();


if(isset($_SESSION['username'])){


	
include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);

$phone = mysqli_real_escape_string($con, $_POST['phone']);




$ud = "INSERT INTO `phone` (`pid`, `username`, `phone`) VALUES (NULL, '$username', '$phone')";

$ud_1 = mysqli_query($con, $ud);

if($ud_1){



	echo '<html>
        <meta http-equiv="refresh" content="0; URL=../getting_started?setupID_1=birthday" />
        </html>';

}



}
else{
	
	echo '<script>

	window.location.href="../"

	</script>';

}























?>