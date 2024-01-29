<?php session_start(); ?>


<?php

session_start();


if(isset($_SESSION['username'])){


	
include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);

$day = mysqli_real_escape_string($con, $_POST['day']);

$month = mysqli_real_escape_string($con, $_POST['month']);

$year = mysqli_real_escape_string($con, $_POST['year']);



$ud = "INSERT INTO `birthday` (`bid`, `username`, `day`, `month`, `year`) VALUES (NULL, '$username', '$day', '$month', '$year')";

$ud_1 = mysqli_query($con, $ud);

if($ud_1){



	echo '<html>
        <meta http-equiv="refresh" content="0; URL=../" />
        </html>';

}



}
else{
	
	echo '<script>

	window.location.href="../"

	</script>';

}























?>