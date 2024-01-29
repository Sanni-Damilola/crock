<?php session_start(); ?>


<?php

session_start();


if(isset($_SESSION['username'])){


	
include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);

$message_shout = mysqli_real_escape_string($con, $_POST['message_shout']);




$ud = "INSERT INTO `shoutout` (`shid`, `username`, `message_shout`, `sh_time`) VALUES (NULL, '$username', '$message_shout', current_timestamp())";

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