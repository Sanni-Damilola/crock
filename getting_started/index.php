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

$username = $_SESSION['username'];


if($_SESSION['username'] == true){

if(isset($_GET['setupID'])){

include "../config.php";

include "../main_header_x.php";

error_reporting(0);


$setupID = mysqli_real_escape_string($con, $_GET['setupID']);






echo '<title>Add phone number - Crock </title>';

echo '<center><image src="../images/phone-call.png" width="100" /></center>';

echo '<div style="background-color: yellow; width: 100%; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/phone-call.png" width="30" /> Add your phone number to continue.</b>
</div>
<br>
</div><br>';


echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

<br><br>

<center>
<form onsubmit="event.preventDefault()">

<input type="text" class="blogin" id="phone" value="" placeholder="Phone Number" />

</center>

<center><button onclick="savePhone()" class="vlogin_b"><b>Save</b></button></center>


</form>

<br><br>
<center>
<a href="?setupID_1=birthday">Skip this step</a>
</center>

<br><br>

</div>




';






}







//birthday







if(isset($_GET['setupID_1'])){

include "../config.php";

include "../main_header_x.php";

error_reporting(0);


$setupID_1 = mysqli_real_escape_string($con, $_GET['setupID_1']);






echo '<title>Add birthday - Crock </title>';

echo '<center><image src="../images/gift-box.png" width="100" /></center>';

echo '<div style="background-color: yellow; width: 100%; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/gift-box.png" width="30" /> Tell us your birthday to continue.</b>
</div>
<br>
</div><br>';


echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

<br><br>

<center>
<form onsubmit="event.preventDefault()">
<table width="100%">

<td>
<input type="text" class="blogin" id="day" value="" placeholder="day" />
</td>

<td>
<input type="text" class="blogin" id="month" value="" placeholder="month" />
</td>

<td>
<input type="text" class="blogin" id="year" value="" placeholder="year" />
</td>
</table>
</center>

<center><button onclick="saveBirthday()" class="vlogin_b"><b>Save</b></button></center>


</form>

<br><br>
<center>
<a href="../">Skip this step</a>
</center>

<br><br>

</div>




';






}
































}
else{

echo '<script>

window.location.href="../"


</script>
';



}









?>