<?php session_start(); ?>


<html>

<head>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  
<meta description="Crock is an online social networking platform that all users talk about there experience" />






<link rel="stylesheet" type="text/css" href="../rope_mobile.css" />

<script src="../jquery.js"></script>
<script src="../vue.js"></script>
<script src="../hm.js"></script>


<title>Create a new topic</title>




<?php


session_start();

if(isset($_SESSION['username'])==true){

include "../config.php";


include "../main_header_2.php";

$username = mysqli_real_escape_string($con, $_SESSION['username']);






echo '
<br>
<h2>New Topic</h2>

<center>
<div class="auto">
<p class="x"></p>
</div>
</center>

<center>

<div class="nwcontent_l_regx">
<form onsubmit="event.preventDefault()">
<br>


<input type="text" class="blogin" value="" placeholder="Topic title" id="forum_title" />
<br>
<br>
<textarea class="btext" placeholder="topic content here...." id="forum_body"></textarea>
<br>
<br>

<select id="forum_type" class="blogin">
<option value="">--Select Type--</option>
<option value="c/Public">c/Public</option>
<option value="c/Games">c/Games</option>
<option value="c/Tutorial">c/Tutorial</option>
<option value="c/Technology">c/Technology</option>
<option value="c/News">c/News</option>
<option value="c/Free Browsing">c/Free Browsing</option>
<option value="c/Sports">c/Sports</option>
<option value="c/Tutorials">c/Tutorials</option>
<option value="c/ForSell">c/ForSell</option>
<option value="c/Fashion">c/Fashion</option>

</select>
<br><br>
<div style="background-color: red; color: white; width: 100%; height: 50px; "><br>Please select a method of viewing this topic? <a href="../topic?m=privacy topic posting"><b>Learn more</b></a></div>
<br><br>
<button class="vlogin_b" onclick="createNewTopic()"><b>Create Topic</b></button>
</form>

<br>

</div>

</center>';






}
else{

echo '<script>


window.location.href="../"


</script>';


}





















?>