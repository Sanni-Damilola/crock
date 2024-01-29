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


<title>Delete Topic - Crock </title>


<?php


session_start();

$username = $_SESSION['username'];


if($_SESSION['username'] == true){

if(isset($_GET['refid'])){

include "../config.php";

include "../main_header_x.php";

error_reporting(0);


$refid = mysqli_real_escape_string($con, $_GET['refid']);




echo '<div style="background-color: yellow; width: 100%; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="../images/w.gif" /> Do you really want to delete this topic?</b>
</div>
<br>
</div><br>';


echo '<div style="background-color: white; width: 100%; border-radius: 5px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

<br><br>

<center>
<form onsubmit="event.preventDefault()">

<input type="hidden" id="refid" value="'.$refid.'" />

<select id="xvl" class="blogin">
<option value="">-------Choose option--------</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>

</center>

<center><button onclick="deleteTopic()" class="vlogin_b"><b>Save</b></button></center>


</form>


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