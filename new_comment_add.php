<?php session_start(); ?>

<?php

session_start();


if(isset($_SESSION['username'])==true){



include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);
$fid = mysqli_real_escape_string($con, $_POST['fid']);
$comment_text = mysqli_real_escape_string($con, htmlspecialchars($_POST['comment_text']));









$ix = "INSERT INTO `comments` (`commid`, `username`, `fid`, `comment_text`) VALUES (NULL, '$username', '$fid', '$comment_text')";

$b = mysqli_query($con, $ix);
if($b){

	echo '<html>
        <meta http-equiv="refresh" content="0; URL=../read?openTopicID='.$fid.'" />
        </html>';

}
else{
	echo 'fail to add';
}



	

}else{


echo '<script>

window.location.href="./"

</script>';


}









?>