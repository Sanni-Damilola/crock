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




<?php

session_start();

if(isset($_SESSION['username'])){


include '../config.php';


$username = mysqli_real_escape_string($con, $_SESSION['username']);


include "../main_header_2.php";


echo '<title>Change profile photo - Crock</title>';


$ph = "SELECT * FROM `userpics` WHERE `username` = '$username'";
$ph_1 = mysqli_query($con, $ph);
$ph_2 = mysqli_num_rows($ph_1);
if($ph_2){

while($info = mysqli_fetch_assoc($ph_1)){

$userpicx = $info['userpicx'];

echo '<br><b>Change profile photo</b><br><br>';

echo '<center>
<image src="../'.$userpicx.'" width="150" alt="Change_profile_pic" />
</center><br><br>';


echo '
<form action="../upload_verify/" method="POST" enctype="multipart/form-data">
  <label for="files">
<input class="blogin" type="file" name="filex" multiple>
<center>
<button class="vlogin_b"><b>Upload</b></button>
</center>
</form>';


}
}




}
else{

echo '<script>


window.location.href="../"

</script>';


}













?>