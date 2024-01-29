<?php session_start(); ?>



<html>

<head>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  
<meta description="Ropes is an online social networking platform that all users talk about there experience" />






<link rel="stylesheet" type="text/css" href="../rope_mobile.css" />

<script src="../jquery.js"></script>
<script src="../vue.js"></script>
<script src="../hm.js"></script>


<title>Notification - Crock </title>


<?php


session_start();

$username = $_SESSION['username'];


if($_SESSION['username'] == true){


include "../config.php";

include "../main_header_x.php";

error_reporting(0);




$q = mysqli_real_escape_string($con, $_GET['q']);










echo '<br><br><b>Notification</b>
<br><br>';



$fnot = "SELECT * FROM `birthday` WHERE `username` = '$username'";
$fnot_1 = mysqli_query($con, $fnot);
$fnot_2 = mysqli_num_rows($fnot_1);
if($fnot_2>0){

}
else{

echo '<br><div style="background-color: yellow; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/phone-call.png" width="30"/> <a href="../getting_started?setupID=phone">Add a phone number to your profile</b></a>
</div>
<br>
</div>';

}


$fnot = "SELECT * FROM `birthday` WHERE `username` = '$username'";
$fnot_1 = mysqli_query($con, $fnot);
$fnot_2 = mysqli_num_rows($fnot_1);
if($fnot_2>0){

}
else{

echo '<br><div style="background-color: yellow; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/gift-box.png" width="30"/> <a href="../getting_started?setupID_1=birthday">Add your birthday so that we can celebrate with you</b></a>
</div>
<br>
</div>';

}



//echo '<center>
//<br><br>
//<image src="../images/notify.png" width="200" alt="hot" />
//</center>
//<br>
//<br>
//<br>
//<br>
//<br>
//<center><b>Your notifications will be shown here</b></center>
//';






}
else{

	echo '<script>

		window.location.href="../"

	</script>';
}
