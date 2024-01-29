
<html>

<head>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  
<meta description="Ropes is an online social networking platform that all users talk about there experience" />






<link rel="stylesheet" type="text/css" href="../rope_mobile.css" />

<script src="../jquery.js"></script>
<script src="../hm.js"></script>


<title>Login to Crock</title>



<?php



include "../config.php";







echo '<center>

<div class="nwcontent_l">
<br><br>
<image src="../images/logo_l.png" width="200" />
<br><br>
<form onsubmit="event.preventDefault()">

<center>
<div class="auto">
<p class="x"></p>
</div>
</center>

<input type="text" class="blogin" value="" placeholder="Username" id="username" />
<br>
<br>
<input type="password" class="blogin" value="" placeholder="Password" id="password" />
<br>
<br>
<button class="vlogin_b" onclick="loginCheck()"><b>Login</b></button>
</form>

<table align="">
<td>
<a href="forgot"><b>Forgot Password</b></a>
</td>
</table>

<br><br>

<button onclick="reg_r()" class="vlogin-reg-btn"><b>Register</b></button>


</div>

</center>';






























?>