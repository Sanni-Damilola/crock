
<html>

<head>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  
<meta description="Ropes is an online social networking platform that all users talk about there experience" />






<link rel="stylesheet" type="text/css" href="../rope_mobile.css" />

<script src="../jquery.js"></script>
<script src="../hm.js"></script>


<title>Create account | Crock</title>



<?php



include "../config.php";







echo '<center>

<div class="nwcontent_l_reg">
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
<input type="text" class="blogin" value="" placeholder="Firstname" id="firstname" />
<br>
<br>
<input type="text" class="blogin" value="" placeholder="Surname" id="surname" />
<br>
<br>
<select id="gender" class="blogin">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<br><br>
<button class="vlogin_b" onclick="regCheck()"><b>Register</b></button>
</form>


<br>

<button onclick="rlogin()" class="vlogin-reg-btn"><b>Login</b></button>


</div>

</center>';






























?>