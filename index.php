<?php session_start(); ?>


<html>

<head>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  
<meta description="Crock is an online social networking platform that all users talk about there experience" />






<link rel="stylesheet" type="text/css" href="rope_mobile.css" />

<script src="jquery.js"></script>
<script src="vue.js"></script>
<script src="hm.js"></script>


<title>Welcome to Crock</title>





<?php

error_reporting(0);

session_start();

$username = $_SESSION['username'];


if($_SESSION['username'] == true){


include "config.php";

include "main_header_1.php";




$user_ip = $_SERVER['REMOTE_ADDR'];

$uc = "INSERT INTO `usersip` (`uip`, `user_ip`, `username`) VALUES ( NULL, '$user_ip', '$username')";
$uc_1 = mysqli_query($con, $uc);
if($uc_1){
	
}



$qs = "SELECT * FROM `settingsusers` WHERE `username` = '$username'";
$qs_1 = mysqli_query($con, $qs);
$qs_2 = mysqli_num_rows($qs_1);
if($qs_2>0){

}
else{

$nt = "INSERT INTO `settingsusers` (`sid`, `username`, `user_behaviour`, `ads`) VALUES ( NULL, '$username', '', '')";
$nt_1 = mysqli_query($con, $nt);
if($nt_1){
	
}
}




echo '

<style>

.pxy{
	background-color: brown;
	color: white;
	height: 40px;
	border-radius: 5px;
	border: none;

}

</style>


<script>


var freeBrowsing = () =>{
	window.location.href="showtag?m=c/FreeBrowsing";

}


var tech = () =>{

	window.location.href="showtag?m=c/Tech";
	
}


var news = () =>{

	window.location.href="showtag?m=c/News";
	
}


var games = () =>{

	window.location.href="showtag?m=c/Games";
	
}


var moreLink = () =>{

	window.location.href="alltopics";
	
}




</script>



<div style="background-color: black; color: white; height: 70px;">
<br>

<table width="100%">
<td>


<image src="images/fire.png" width="20" alt="hot" /><a href="alltopics"><b>All Forums</b></a>(<font color="red"><b>9</b></font>)

</td>








<td>
<image src="images/profile.png" width="20" alt="hot" /> <a href="profile"><b>Profile</b></a>
</td>


<td>
<image src="images/settings.png" width="20" alt="hot" /> <a href="settings"><b>My Settings</b></a>
</td>


<td>
<image src="images/megaphone.png" width="20" alt="hot" /> <a href="shoutout?create=new"><b>Make a Shoutout</b></a>
</td>

</table>
<br><br>
</div>


<br>';


echo '<table width="100%">
<td>
<image src="images/notify.png" width="20" alt="hot" />
<b>Quick Notifications</b>
<td>

<td align="right">
<a href="notify">See More</a>
</td>
</table>

';



$fnot = "SELECT * FROM `birthday` WHERE `username` = '$username'";
$fnot_1 = mysqli_query($con, $fnot);
$fnot_2 = mysqli_num_rows($fnot_1);
if($fnot_2>0){

}
else{

echo '<br><div style="background-color: yellow; width: auto; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="images/phone-call.png" width="30"/> <a href="getting_started?setupID=phone">Add a phone number to your profile</b></a>
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

echo '<br><div style="background-color: yellow; width: auto; color: black; border-radius: 3px; padding: 3px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); "><br><div class="auto">
<b class="x"><image src="images/gift-box.png" width="30"/> <a href="getting_started?setupID_1=birthday">Add your birthday so that we can celebrate with you</b></a>
</div>
<br>
</div>';

}






echo '<br><br><table width="100%">
<td>
<image src="images/megaphone.png" width="20" alt="hot" /><b>Shouts</b>
<td>


</table>

';



$snot = "SELECT * FROM `shoutout` ORDER BY `shoutout`.`sh_time` DESC LIMIT 1";
$snot_1 = mysqli_query($con, $snot);
$snot_2 = mysqli_num_rows($snot_1);
if($snot_2>0){


while($xib = mysqli_fetch_assoc($snot_1)){


	$s_username = $xib['username'];
	$s_message_shout = $xib['message_shout'];


	$sel00 = "SELECT * FROM `userpics` WHERE `username` = '$s_username'";
		$sel_11 = mysqli_query($con, $sel00);
		$sel_21 = mysqli_num_rows($sel_11);
		if($sel_21>0){

			while($ifh1 = mysqli_fetch_assoc($sel_11)){
				$upix1 = $ifh1['userpicx'];
			}

		}




	echo '<br><div class="nwcontent">
	<br>
		<table width="100%">
		<td align="center">
		<image src="'.$upix1.'" width="40" />
	 <a href="profile?view='.$s_username.'"><b>'.$s_username.'</b></a> <image src="images/megaphone.png" width="20" alt="hot" /> '.$s_message_shout.'
	</td>


	

	</table>
<br>
	</div>


	';



}


}
else{


	echo '<br><div class="nwcontent">
		<br>
		<center>No shout out for now</center>
		<br>
	</div>';



}















echo '<br><br>';

echo '<image src="images/fire.png" width="20" alt="hot" /><b>Whats new on Crock</b> | <image src="images/search.png" width="20" alt="search" /><a href="search"><b>Search the entire crock</b></a><br>';







$u_n = "SELECT * FROM `forum_post` ORDER BY `forum_post`.`forum_time_created` DESC";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_type = $info['forum_type'];
		$forum_time_created = $info['forum_time_created'];


		$sel = "SELECT * FROM `userpics` WHERE `username` = '$username_t'";
		$sel_1 = mysqli_query($con, $sel);
		$sel_2 = mysqli_num_rows($sel_1);
		if($sel_2>0){

			while($ifh = mysqli_fetch_assoc($sel_1)){
				$upix = $ifh['userpicx'];
			}

		}


		if($username == $username_t){

					echo '<br><div class="nwcontent">
		<br>
		<table width="100%">
		<td>
		<image src="'.$upix.'" width="50" />
	<image src="images/home.png" width="20" /> <a href="read?openTopicID='.$fid.'"><b>'.$forum_title.'</b></a>
	</td>

	<td align="right">
		<a href="deleteTopic?refid='.$fid.'"><b>Delete Topic</b></a>
	</td>
	<tr></tr>';


		}
		else{

					echo '<br><div class="nwcontent">
		<br>
		<table width="100%">
		<td>
		<image src="'.$upix.'" width="50" />
	<image src="images/home.png" width="20" /> <a href="read?openTopicID='.$fid.'"><b>'.$forum_title.'</b></a>
	</td>
	<tr></tr>';


		}

	echo '<td>
	<br>
	 <image src="images/post.gif" width="20" /><a href="showtag?m='.$forum_type.'"><b>'.$forum_type.'</b></a>
	<br>
	<td>
	<tr></tr>

	<td>
	<image src="images/profile.png" width="20" /><a href="profile?view='.$username_t.'">'.$username_t.'</a>
	</td>
	<tr></tr>
	
	</table>

	<br>';
	

echo '<table width="100%">
	';

	$like = "SELECT * FROM `likes` WHERE `fid` = '$fid'";
	$like_1 = mysqli_query($con, $like);
	$like_2 = mysqli_num_rows($like_1);
	if($like_2>0){

		echo '<td>
		
		
		<button><image src="images/like.png" width="30" /> '
		.$like_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="images/like.png" width="30" /> 0 </button>
		</td>
		'; 
	}
	



	$dlike = "SELECT * FROM `dislikes` WHERE `fid` = '$fid'";
	$dlike_1 = mysqli_query($con, $dlike);
	$dlike_2 = mysqli_num_rows($dlike_1);
	if($dlike_2>0){

		echo '<td>
		
		<button><image src="images/dislike.png" width="30" /> '
		.$dlike_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="images/dislike.png" width="30" /> 0 </button>
		</td>
		'; 
	}
   
	$qcom = "SELECT * FROM `comments` WHERE `fid` = '$fid'";
	$uq = mysqli_query($con, $qcom);
	$uq1 = mysqli_num_rows($uq);
	if($uq1>0){
	 
	 echo '<td><image src="images/comment.png" width="30" /> '.$uq1.'</td>';
	
	}else{

		echo '<td><image src="images/comment.png" width="30" /> 0</td>';

	}

		echo '<td>
		
		<button><image src="images/clock.png" width="30" /> '.$forum_time_created.' </button>
		</td>
		'; 

	 echo '</table>';
	 



	 

echo '</div>';



	}
}
else{

	echo '<center><b>No topics created yet.</b></center>';
}









echo '<br><br><br><br>
<br><br>';


echo '<div class="nwcontent-ftlogin-c">

<table width="100%">

<td align="center">
<button onclick="profile()"><image src="images/profile.png" width="30" /></button>
</td>


<td align="center">
<button onclick="search()"><image src="images/search.png" width="30" /></button>
</td>


<td align="center">
<button onclick="plus()"><image src="images/plus.png" width="45" /></button>
</td>



<td align="center">
<button onclick="settings()"><image src="images/settings.png" width="30" /></button>
</td>


<td align="center">
<button onclick="notify()"><image src="images/notify.png" width="30" /></button>
</td>


</table>


</div>';


















}
else{



include "main_header_1.php";

include "config.php";



echo '

<style>

.pxy{
	background-color: brown;
	color: white;
	height: 40px;
	border-radius: 5px;
	border: none;

}

</style>


<script>

var freeBrowsing = () =>{
	window.location.href="showtag?m=c/FreeBrowsing";

}


var tech = () =>{

	window.location.href="showtag?m=c/Tech";
	
}


var news = () =>{

	window.location.href="showtag?m=c/News";
	
}


var games = () =>{

	window.location.href="showtag?m=c/Games";
	
}


var moreLink = () =>{

	window.location.href="alltopics";
	
}



</script>



<div style="background-color: black; color: white; height: 60px; padding: 5px; ">
<br>

<table width="100%">
<td>
<a href="alltopics"><b>All Forum</b></a>(<font color="red"><b>9</b></font>)
</td>

<td>
<image src="images/fire.png" width="20" alt="hot" /> <a href="alltopics"><b>Hot Topics</b></a>
</td>


<td>
<image src="images/profile.png" width="20" alt="hot" /> <a href="login"><b>Login</b></a>
</td>


<td>
<image src="images/profile.png" width="20" alt="hot" /> <a href="create"><b>Create account</b></a>
</td>
</table>
</div>

<br><br>';



$user_ip = $_SERVER['REMOTE_ADDR'];

$u = "INSERT INTO `visitorsip` (`ip`, `user_ip`) VALUES ( NULL, '$user_ip')";
$u_1 = mysqli_query($con, $u);
if($u_1){

}



echo '
<image src="images/fire.png" width="20" alt="hot" /><b>Whats new on Crock</b><br>';




$u_n = "SELECT * FROM `forum_post` ORDER BY `forum_post`.`forum_time_created` DESC LIMIT 0, 10";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_type = $info['forum_type'];
		$forum_time_created = $info['forum_time_created'];

		$sel = "SELECT * FROM `userpics` WHERE `username` = '$username_t'";
		$sel_1 = mysqli_query($con, $sel);
		$sel_2 = mysqli_num_rows($sel_1);
		if($sel_2>0){

			while($ifh = mysqli_fetch_assoc($sel_1)){
				$upix = $ifh['userpicx'];
			}

		}


		echo '<br><div class="nwcontent">
		<br>
		<image src="'.$upix.'" width="70" />
	<image src="images/home.png" width="20" /> <a href="read?openTopicID='.$fid.'"><b>'.$forum_title.'</b></a>
	<br><br>
	<image src="images/post.gif" width="20" /><a href="showtag?m='.$forum_type.'"><b>'.$forum_type.'</b></a>
	<br><br>';




echo '<table width="100%">
	';

	$like = "SELECT * FROM `likes` WHERE `fid` = '$fid'";
	$like_1 = mysqli_query($con, $like);
	$like_2 = mysqli_num_rows($like_1);
	if($like_2>0){

		echo '<td>
		
		
		<button><image src="images/like.png" width="30" /> '
		.$like_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="images/like.png" width="30" /> 0 </button>
		</td>
		'; 
	}
	



	$dlike = "SELECT * FROM `dislikes` WHERE `fid` = '$fid'";
	$dlike_1 = mysqli_query($con, $dlike);
	$dlike_2 = mysqli_num_rows($dlike_1);
	if($dlike_2>0){

		echo '<td>
		
		<button><image src="images/dislike.png" width="30" /> '
		.$dlike_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="images/dislike.png" width="30" /> 0 </button>
		</td>
		'; 
	}
   
	$qcom = "SELECT * FROM `comments` WHERE `fid` = '$fid'";
	$uq = mysqli_query($con, $qcom);
	$uq1 = mysqli_num_rows($uq);
	if($uq1>0){
	 
	 echo '<td><image src="images/comment.png" width="30" /> '.$uq1.'</td>';
	
	}else{

		echo '<td><image src="images/comment.png" width="30" /> 0</td>';

	}

	echo '<td>
		
		<button><image src="images/clock.png" width="30" /> '.$forum_time_created.' </button>
		</td>
		'; 

	 echo '</table>';


	
	 

echo '</div>';



	}
}
else{

	echo '<center><b>No topics created yet.</b></center>';
}




echo '<br><br><br><br>
<br><br><br><br>
<br><br>';


echo '<div class="nwcontent-ftlogin">

<center><h2>You need to Login first</h2>
<p>to see more you need to create an account first</p>
<button class="vlogin" onclick="login()"><b>Login</b></button> <button class="vlogin-reg" onclick="reg()"><b>Register</b></button>
</center>
</div>';























}


?>