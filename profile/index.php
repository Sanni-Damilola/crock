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
	
if(isset($_GET['view'])){
	
include "../config.php";

$username = mysqli_real_escape_string($con, $_SESSION['username']);

$view_username = mysqli_real_escape_string($con, $_GET['view']);



include "../main_header_2.php";


echo '<title>'.$view_username.' - Crock</title>';



$y = "SELECT * FROM `ropes_users` WHERE `username` = '$view_username'";
$y1 = mysqli_query($con, $y);
$y2 = mysqli_num_rows($y1);
if($y2>0){

	while($info = mysqli_fetch_assoc($y1)){

		$usernamez = $info['username'];
		$firstname = $info['firstname'];
		$surname = $info['surname'];
		$gender = $info['gender'];



	$uj = "SELECT * FROM `userpics` WHERE `username` = '$usernamez'";
	$uj1 = mysqli_query($con, $uj);
	$uj2 = mysqli_num_rows($uj1);
	if($uj2>0){

		while($xinfo = mysqli_fetch_assoc($uj1)){
			$userpics = $xinfo['userpicx'];
	


		echo '
			<br>

			<div style="background-color: white; border-radius: 5px; border: none; padding: 10px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); ">

			<br>

			<table width="100%">

			<td align="left">

			<image src="../'.$userpics.'" width="120"/>
			<br>
			<font color="#ccc">@ '.$usernamez.'</font>
			</td>


			<td align="right">

				<button class="lop"> <image src="../images/follow.png" width="50" /></button>


			<br><br>
				<button class="lop"> <image src="../images/poke.png" width="30" /> </button>
				

			</td>




			</table>
			<br>
			<b>'.$firstname.' '.$surname.'</b> - '.$gender.'




			
			<br><br>
			</div>

			<table width="100%">

			<td>
			<button style="background-color: #f6f3f3; width: 100%; color: black; font-size: 20px; height: 80px; ">Topics</button>
			</td>

			<td>
			<button style="background-color: #ccc; width: 100%; color: black; font-size: 20px; height: 80px; "><b>Info</b></button>
			</td>

				<td>
			<button style="background-color: #ccc; width: 100%; color: black; font-size: 20px; height: 80px; "><b>Follow  0</b></button>
			</td>

			</table>
			
			

		';




		$u_n = "SELECT * FROM `forum_post` WHERE `username` = '$username' ORDER BY `forum_post`.`forum_time_created` DESC LIMIT 0, 5";
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

	echo '<center><br><br><br><b>No topics created yet.</b></center>';
}

	}
}


	}
}
else{


	echo '<center><b>This user profile does not exist</b></center>';
}











}else{


//user edit profile 


session_start();

if(isset($_SESSION['username'])){


$uname = $_SESSION['username'];

	include "../main_header_2.php";

	include "../config.php";

		






echo '<title>'.$uname.' - Crock</title>';





$y = "SELECT * FROM `ropes_users` WHERE `username` = '$uname'";
$y1 = mysqli_query($con, $y);
$y2 = mysqli_num_rows($y1);
if($y2>0){

	while($info = mysqli_fetch_assoc($y1)){

		$usernamez = $info['username'];
		$firstname = $info['firstname'];
		$surname = $info['surname'];
		$gender = $info['gender'];


			$uj = "SELECT * FROM `userpics` WHERE `username` = '$usernamez'";
	$uj1 = mysqli_query($con, $uj);
	$uj2 = mysqli_num_rows($uj1);
	if($uj2>0){

		while($xinfo = mysqli_fetch_assoc($uj1)){
			$userpics = $xinfo['userpicx'];
	


		echo '
			<br>

			<div style="background-color: white; border-radius: 5px; border: none; padding: 10px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); ">

			<br>

			<table width="100%">

			<td align="left">

			<image src="../'.$userpics.'" width="120"/>
			<br>
			<font color="#ccc">@ '.$usernamez.'</font>
			</td>


			<td align="right">

				<button onclick="changePhoto()" class="lop"> <b>Change Photo</b> </button>

			</td>

			</table>
			<br>
			<b>'.$firstname.' '.$surname.'</b> - '.$gender.'




			
			<br><br>
			</div>

			<table width="100%">

			<td>
			<button style="background-color: #f6f3f3; width: 100%; color: black; font-size: 20px; height: 80px; ">Topics</button>
			</td>

			<td>
			<button style="background-color: #ccc; width: 100%; color: black; font-size: 20px; height: 80px; "><b>Info</b></button>
			</td>

				<td>
			<button style="background-color: #ccc; width: 100%; color: black; font-size: 20px; height: 80px; "><b>Followers 0</b></button>
			</td>

			</table>
			
			

		';




		$u_n = "SELECT * FROM `forum_post` WHERE `username` = '$uname' LIMIT 0, 5";
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

	echo '<center><br><br><br><b>No topics created yet.</b></center>';
}


	}
}
else{

	echo '<center><br><br><br><b>No topics created yet.</b></center>';
}

	}
}
else{


	echo '<center><b>This user profile does not exist</b></center>';
}








}










}






if(isset($_GET['edit'])){

include "../config.php";
	
$uid_edit = mysqli_real_escape_string($con, $_GET['uid_edit']);









}















}
else{
	
	echo '<script>

	window.location.href="../"

	</script>';
}



















?>