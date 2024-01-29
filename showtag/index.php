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

error_reporting(0);

session_start();


if(isset($_GET['m'])){

if($_SESSION['username'] == true){

$username = $_SESSION['username'];

include "../config.php";

include "../main_header_2.php";

$m = mysqli_real_escape_string($con, $_GET['m']);

echo '<title>'.$m.' - Crock</title>';

echo '<image src="../images/t_pin.gif" width="" />
	<b>'.$m.'</b><br><br>';


$u_n = "SELECT * FROM `forum_post` WHERE `forum_type` = '$m'";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_time_created = $info['forum_time_created'];


		echo '<div class="nwcontent">
		<br>
	<image src="../images/home.png" width="20" /> <a href="../read?openTopicID='.$fid.'"><b>'.$forum_title.'</b></a>
	<br>
	<br>
	<image src="../images/profile.png" width="20" /><a href="../profile?view='.$username_t.'">'.$username_t.'</a>
	

	<br><br>';



	echo '<table width="100%">
	';

	$like = "SELECT * FROM `likes` WHERE `fid` = '$fid'";
	$like_1 = mysqli_query($con, $like);
	$like_2 = mysqli_num_rows($like_1);
	if($like_2>0){

		echo '<td>
		
		
		<button><image src="../images/like.png" width="30" /> '
		.$like_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="../images/like.png" width="30" /> 0 </button>
		</td>
		'; 
	}
	




	$dlike = "SELECT * FROM `dislikes` WHERE `fid` = '$fid'";
	$dlike_1 = mysqli_query($con, $dlike);
	$dlike_2 = mysqli_num_rows($dlike_1);
	if($dlike_2>0){

		echo '<td>
		
		<button><image src="../images/dislike.png" width="30" /> '
		.$dlike_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="../images/dislike.png" width="30" /> 0 </button>
		</td>
		'; 
	}
   
	$qcom = "SELECT * FROM `comments` WHERE `fid` = '$fid'";
	$uq = mysqli_query($con, $qcom);
	$uq1 = mysqli_num_rows($uq);
	if($uq1>0){
	 
	 echo '<td><image src="../images/comment.png" width="30" /> '.$uq1.'</td>';
	
	}else{

		echo '<td><image src="../images/comment.png" width="30" /> 0</td>';

	}


	echo '<td>
		
		<button><image src="../images/new.gif" width="30" /> '.$forum_time_created.' </button>
		</td>
		'; 

	 echo '</table>';


	 

echo '</div><br>';



	}
}
else{

	echo '<center><image src="../images/404.png" width="550" />
	<br><b>Nothing here.</b></center>';
}

}else{





if(isset($_GET['m'])){


include "../config.php";

include "../main_header_xm.php";

$m = mysqli_real_escape_string($con, $_GET['m']);

echo '<title>'.$m.' - Crock</title>';

echo '<image src="../images/t_pin.gif" width="" />
	<b>'.$m.'</b><br><br>';

$u_n = "SELECT * FROM `forum_post` WHERE `forum_type` = '$m'";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_time_created = $info['forum_time_created'];


		echo '<div class="nwcontent">
		<br>
	<image src="../images/home.png" width="20" /> <a href="../read?openTopicID='.$fid.'"><b>'.$forum_title.'</b></a>
	<br>
	<br>
	<image src="../images/profile.png" width="20" /><a href="../profile?view='.$username_t.'">'.$username_t.'</a>
	

	<br><br>';


	echo '<table width="100%">
	';

	$like = "SELECT * FROM `likes` WHERE `fid` = '$fid'";
	$like_1 = mysqli_query($con, $like);
	$like_2 = mysqli_num_rows($like_1);
	if($like_2>0){

		echo '<td>
		
		
		<button><image src="../images/like.png" width="30" /> '
		.$like_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="../images/like.png" width="30" /> 0 </button>
		</td>
		'; 
	}
	




	$dlike = "SELECT * FROM `dislikes` WHERE `fid` = '$fid'";
	$dlike_1 = mysqli_query($con, $dlike);
	$dlike_2 = mysqli_num_rows($dlike_1);
	if($dlike_2>0){

		echo '<td>
		
		<button><image src="../images/dislike.png" width="30" /> '
		.$dlike_2.'</button>
		</td>
		';  
	}
	else{

		echo '<td>
		
		<button><image src="../images/dislike.png" width="30" /> 0 </button>
		</td>
		'; 
	}
   
	$qcom = "SELECT * FROM `comments` WHERE `fid` = '$fid'";
	$uq = mysqli_query($con, $qcom);
	$uq1 = mysqli_num_rows($uq);
	if($uq1>0){
	 
	 echo '<td><image src="../images/comment.png" width="30" /> '.$uq1.'</td>';
	
	}else{

		echo '<td><image src="../images/comment.png" width="30" /> 0</td>';

	}


	echo '<td>
		
		<button><image src="../images/clock.png" width="30" /> '.$forum_time_created.' </button>
		</td>
		'; 

	 echo '</table>';








echo '</div><br>';

}

	}
	else{

	echo '<center>

	<image src="../images/404.png" width="550" />
	<br>
	<b>Nothing here.</b></center>';
}
}















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
}


?>