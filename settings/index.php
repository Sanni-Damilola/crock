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


<title>Settings - Crock </title>


<?php


session_start();

$username = $_SESSION['username'];


if($_SESSION['username'] == true){


include "../config.php";

include "../main_header_x.php";

error_reporting(0);




$q = mysqli_real_escape_string($con, $_GET['q']);










echo '<br><b>Settings</b>
<br><br>

<center>

</center>
';

echo '<div style="background-color: yellow; width: 100%; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/w.gif" /> This will be applied automatically</b>
</div>
<br>
</div><br>';

$qs = "SELECT * FROM `settingsusers` WHERE `username` = '$username'";
$qs_1 = mysqli_query($con, $qs);
$qs_2 = mysqli_num_rows($qs_1);
if($qs_2>0){

while($info = mysqli_fetch_assoc($qs_1)){

$user_behaviour = $info['user_behaviour'];
$ads = $info['ads'];




echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">


<form onsubmit="event.preventDefault()">

<table width="100%">

<td align="left">User Behaviour</td>

<td align="right">

<select id="user_behaviour" class="blogin">
<option value="'.$user_behaviour.'">'.$user_behaviour.'</option>
<option value="">--------------------</option>
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

<tr></tr>



<td align="left">Show Ads</td>

<td align="right">

<select id="ads" class="blogin">
<option value="'.$ads.'">'.$ads.'</option>
<option value="">--------------------</option>
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

</table>
</div>

';


echo '<br><br><b>Search & Browser Settings</b><br><br>';

echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

<table width="100%">

<td align="left">Allow crock block trackers</td>

<td align="right">

<select id="xbrowser" class="blogin">
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

<tr></tr>

<td align="left">Allow crock see search history</td>

<td align="right">

<select id="xbrowser" class="blogin">
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

<tr></tr>


<td align="left"><br>Delete my account</td>

<td align="right">
<br>
<a href="#deleteAccount?refid='.$username.'"><b>Torch or Click here</b></a> to delete
</td>



</table>
<br><br>
</div>
<br><br>

<center><button class="vlogin_b" onclick="settingsUpdate()"><b>Save</b></button></center>
</form>

';



}

}
else{





echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px;">


<form onsubmit="event.preventDefault()">

<table width="100%">

<td align="left"><b>User Behaviour</b></td>

<td align="right">

<select id="user_behaviour" class="blogin">
<option value="">--------------------</option>
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

<tr></tr>



<td align="left"><b>Show Ads</b></td>

<td align="right">

<select id="ads" class="blogin">
<option value="">--------------------</option>
<option value="ON">ON</option>
<option value="OFF">OFF</option>
</select>

</td>

</table>
<br><br>


<button class="vlogin_b" onclick="settingsUpdate()"><b>Save</b></button>
</form>




</div>';





}





}
else{

	echo '<script>

		window.location.href="../"

	</script>';
}
