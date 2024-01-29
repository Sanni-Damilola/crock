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

<title>All Topics - Crock</title>


<?php

session_start();

if(isset($_SESSION['username'])==true){

include "../config.php";



include "../main_header_2.php";



$username_r = mysqli_real_escape_string($con, $_SESSION['username']);


echo '<b>All Topics</b><br><br>';


echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=Games"><b>c/Games<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Public"><b>c/Public<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Games"><b>c/Games<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';




echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Tutorial"><b>c/Tutorial<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';






echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Technology"><b>c/Technology<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';








echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/News"><b>c/News<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';






echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Sports"><b>c/Sports<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Free Browsing"><b>c/Free Browsing<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';




echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/ForSell"><b>c/ForSell<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';




echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Fashion"><b>c/Fashion<b></a>
</td>

			<td align="right">
			<image src="../images/join.png" width="50" />
			</td>

	</table>


</div><br>';







}
else{




include "../main_header_xm.php";


echo '<b>All Topics</b><br><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=Games"><b>c/Games<b></a>
</td>

			
	</table>


</div><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Public"><b>c/Public<b></a>
</td>

			
	</table>


</div><br>';






echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Tutorial"><b>c/Tutorial<b></a>
</td>


	</table>


</div><br>';






echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Technology"><b>c/Technology<b></a>
</td>

	</table>


</div><br>';








echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/News"><b>c/News<b></a>
</td>

		
	</table>


</div><br>';






echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Sports"><b>c/Sports<b></a>
</td>

		

	</table>


</div><br>';



echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Free Browsing"><b>c/Free Browsing<b></a>
</td>

		

	</table>


</div><br>';




echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/ForSell"><b>c/ForSell<b></a>
</td>

			

	</table>


</div><br>';




echo '<div class="plist">

<table width="100%">
<td>
<image src="../images/com.png" width="50" />
<a href="../showtag?m=c/Fashion"><b>c/Fashion<b></a>
</td>

			

	</table>


</div><br>';


























echo '<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
';



echo '<div class="nwcontent-ftlogin">

<center><h2>You need to Login first</h2>
<p>to see more you need to create an account first</p>
<button class="vlogin" onclick="login_r()"><b>Login</b></button> <button class="vlogin-reg" onclick="reg_r()"><b>Register</b></button>
</center>
</div>';


}