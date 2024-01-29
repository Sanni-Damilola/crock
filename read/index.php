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

if(isset($_SESSION['username'])==true){

if(isset($_GET['openTopicID'])){

include "../config.php";



include "../main_header_2.php";



$username_r = mysqli_real_escape_string($con, $_SESSION['username']);


$topicID = mysqli_real_escape_string($con, $_GET['openTopicID']);




$u_n = "SELECT * FROM `forum_post` WHERE `fid` = '$topicID'";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_body = $info['forum_body'];
		$forum_time_created = $info['forum_time_created'];


		$sel = "SELECT * FROM `userpics` WHERE `username` = '$username_t'";
		$sel_1 = mysqli_query($con, $sel);
		$sel_2 = mysqli_num_rows($sel_1);
		if($sel_2>0){

			while($ifh = mysqli_fetch_assoc($sel_1)){
				$upix = $ifh['userpicx'];
			}

		}

		echo '<title> '.$forum_title.' - Crock </title>';

		echo '<br><div style="background-color: white; border-radius: 5px; border: none; padding: 10px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); ">
		<br>
		<image src="../'.$upix.'" width="70" />
	<image src="../images/home.png" width="20" /><b>'.$forum_title.'</b><br><br>
	<image src="../images/clock.png" width="20" /> '.$forum_time_created.'<br>
	<image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" />
	<br>
	Posted by: <image src="../images/profile.png" width="20" /> <a href="../profile?view='.$username_t.'"><b>'.$username_t.'</b></a>
	<br><br>';


	echo '<table width="100%">
	';

	$like = "SELECT * FROM `likes` WHERE `fid` = '$topicID'";
	$like_1 = mysqli_query($con, $like);
	$like_2 = mysqli_num_rows($like_1);
	if($like_2>0){

		echo '<td>
		<form method="post" action="../like_comment_add.php">
		<input type="hidden" value="'.$topicID.'" name="fid" />
		<input type="hidden" value="1" name="like_count" />
		<button><image src="../images/like.png" width="30" /> '
		.$like_2.'</button>
		</form></td>
		';  
	}
	else{

		echo '<td>
		<form method="post" action="../like_comment_add.php">
		<input type="hidden" value="'.$topicID.'" name="fid" />
		<input type="hidden" value="1" name="like_count" />
		<button><image src="../images/like.png" width="30" /> 0 </button>
		</form></td>
		'; 
	}
	



	$dlike = "SELECT * FROM `dislikes` WHERE `fid` = '$topicID'";
	$dlike_1 = mysqli_query($con, $dlike);
	$dlike_2 = mysqli_num_rows($dlike_1);
	if($dlike_2>0){

		echo '<td>
		<form method="post" action="../dislike_comment_add.php">
		<input type="hidden" value="'.$topicID.'" name="fid" />
		<input type="hidden" value="1" name="like_count" />
		<button><image src="../images/dislike.png" width="30" /> '
		.$dlike_2.'</button>
		</form></td>
		';  
	}
	else{

		echo '<td>
		<form method="post" action="../dislike_comment_add.php">
		<input type="hidden" value="'.$topicID.'" name="fid" />
		<input type="hidden" value="1" name="like_count" />
		<button><image src="../images/dislike.png" width="30" /> 0 </button>
		</form></td>
		'; 
	}
   
	$qcom = "SELECT * FROM `comments` WHERE `fid` = '$topicID'";
	$uq = mysqli_query($con, $qcom);
	$uq1 = mysqli_num_rows($uq);
	if($uq1>0){
	 
	 echo '<td><image src="../images/comment.png" width="30" /> '.$uq1.'</td>';
	
	}else{

		echo '<td><image src="../images/comment.png" width="30" /> 0</td>';

	}

	 echo '</table>';
	 

echo '</div><br>';

echo '

<div style="background-color: white; border-radius: 5px; border: none; padding: 10px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); ">

<p>'.$forum_body.'</p>

</div>
';


echo '<br><br><b>Comments</b>';

echo '<center>
<div class="autox">
<p class="x"></p>
</div>
</center>';



echo '<center>
<div class="auto">
<p class="xy"></p>
</div>
</center>';



$qcom = "SELECT * FROM `comments` WHERE `fid` = '$topicID'";
$uq = mysqli_query($con, $qcom);
$uq1 = mysqli_num_rows($uq);
if($uq1>0){
	while($qinfo = mysqli_fetch_assoc($uq)){

		$com_username = $qinfo['username'];
		$comment_text = $qinfo['comment_text'];

	$uj = "SELECT * FROM `userpics` WHERE `username` = '$com_username'";
	$uj1 = mysqli_query($con, $uj);
	$uj2 = mysqli_num_rows($uj1);
	if($uj2>0){

		while($xinfo = mysqli_fetch_assoc($uj1)){
			$userpics = $xinfo['userpicx'];
		}
	}

echo '<div style="background-color: white; width: auto; border-radius: 5px; border: none; padding: 10px; left: 0; bottom: 0; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

	<image src="../'.$userpics.'" width="50" /><a href="../profile?view='.$com_username.'"><b>'.$com_username.'</b> </a>
	<br><br>
	<p>'.$comment_text.'</p>

</div><br>';


}

}
else{

	echo '<br><br>
	<center><b>No Comments</b></center>
	';
}



echo '<br><br><br><br>';


echo '<div style="background-color: white; width:100%; height: 50px; border-radius: 5px; border: none; padding: 10px; left: 0; bottom: 0; position: fixed; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

<table width="100%">
<td>
<input type="hidden" value="'.$topicID.'" id="fid" />
<input type="text" class="xplace" placeholder="Type your comment here..." id="comment_text" value="" />
<button class="lo" onclick="commentNew()">Comment</button>
</td>
</table>


</div>';




	}
}
else{

	echo '<center><b>No topics created yet.</b></center>';
}





}

}
else{


include "../config.php";



include "../main_header_2.php";


if(isset($_GET['openTopicID'])){



$topicID = mysqli_real_escape_string($con, $_GET['openTopicID']);




$u_n = "SELECT * FROM `forum_post` WHERE `fid` = '$topicID'";
$u_n1 = mysqli_query($con, $u_n);
$un = mysqli_num_rows($u_n1);
if($un>0){
	while($info = mysqli_fetch_assoc($u_n1)){

		$fid = $info['fid'];
		$username_t = $info['username'];
		$forum_title = $info['forum_title'];
		$forum_body = $info['forum_body'];
		$forum_time_created = $info['forum_time_created'];


	$uj = "SELECT * FROM `userpics` WHERE `username` = '$username_t'";
	$uj1 = mysqli_query($con, $uj);
	$uj2 = mysqli_num_rows($uj1);
	if($uj2>0){

		while($xinfo = mysqli_fetch_assoc($uj1)){
			$userpics = $xinfo['userpicx'];
		}
	}



		echo '<title> '.$forum_title.' - Crock </title>';


		echo '<br><div style="background-color: white; border-radius: 5px; border: none; padding: 10px;">
		<br>
		<image src="../'.$userpics.'" width="70" />
	<image src="../images/home.png" width="20" /><b>'.$forum_title.'</b><br><br>
	<image src="../images/clock.png" width="20" /> '.$forum_time_created.'<br>
	<image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" /><image src="../images/star.png" width="20" />
	<br>
	Posted by: <image src="../images/profile.png" width="20" /> <a href="../profile?view='.$username_t.'"><b>'.$username_t.'</b></a>
	<br><br>
	
	<image src="../images/like.png" width="30" /> 0   


	<td align="center">
	 <image src="../images/dislike.png" width="30" /> 0   

   
	
	 <image src="../images/comment.png" width="30" /> 0  
	 

</div><br>';

echo '

<div style="background-color: white; border-radius: 5px; border: none; padding: 10px; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1); ">

<p>'.$forum_body.'</p>

</div>
';


echo '<br><br><b>Comments</b>';




echo '<center>
<div class="autox">
<p class="x"></p>
</div>
</center>';



echo '<center>
<div class="auto">
<p class="xy"></p>
</div>
</center>';



$qcom = "SELECT * FROM `comments` WHERE `fid` = '$topicID'";
$uq = mysqli_query($con, $qcom);
$uq1 = mysqli_num_rows($uq);
if($uq1>0){
	while($qinfo = mysqli_fetch_assoc($uq)){

		$com_username = $qinfo['username'];
		$comment_text = $qinfo['comment_text'];

	$uj = "SELECT * FROM `userpics` WHERE `username` = '$com_username'";
	$uj1 = mysqli_query($con, $uj);
	$uj2 = mysqli_num_rows($uj1);
	if($uj2>0){

		while($xinfo = mysqli_fetch_assoc($uj1)){
			$userpics = $xinfo['userpicx'];
		}
	}

echo '<div style="background-color: white; width: auto; border-radius: 5px; border: none; padding: 10px; left: 0; bottom: 0; box-shadow: 1px 2px 3px 4px rgba(5, 6, 4, 0.1);">

	<image src="../'.$userpics.'" width="50" /><a href="../profile?view='.$com_username.'"><b>'.$com_username.'</b> </a>
	<br><br>
	<p>'.$comment_text.'</p>

</div>';


}

}
else{

	echo '<br><br>
	<center><b>No Comments</b></center>
	';
}











}
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



















?>