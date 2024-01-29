<?php session_start(); ?>


<?php

session_start();


if(isset($_SESSION['username'])){


	
include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);

$fid = mysqli_real_escape_string($con, $_POST['fid']);


$like_count = mysqli_real_escape_string($con, $_POST['like_count']);


$us = "SELECT * FROM `likes` WHERE `fid` = '$fid'";
$us_1 = mysqli_query($con, $us);
$us_2 = mysqli_num_rows($us_1);
if($us_2>0){

	echo '<html>
        <meta http-equiv="refresh" content="0; URL=read?openTopicID='.$fid.'" />
        </html>';

}
else{


$ud = "INSERT INTO `likes` (`likid`, `username`, `fid`, `like_count`) VALUES (NULL, '$username', '$fid', '$like_count')";

$ud_1 = mysqli_query($con, $ud);

if($ud_1){



	echo '<html>
        <meta http-equiv="refresh" content="0; URL=read?openTopicID='.$fid.'" />
        </html>';

}





}
}
else{
	
	echo '<script>

	window.location.href="../"

	</script>';

}























?>