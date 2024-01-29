<?php session_start(); ?>

<?php

session_start();


if(isset($_SESSION['username'])==true){



include "config.php";


$username = mysqli_real_escape_string($con, $_SESSION['username']);
$forum_title = mysqli_real_escape_string($con, htmlspecialchars($_POST['forum_title']));
$forum_body = mysqli_real_escape_string($con, $_POST['forum_body']);
$forum_pic = "";
$forum_type = mysqli_real_escape_string($con, $_POST['forum_type']);


$uj = "SELECT `forum_title` FROM `forum_post` WHERE `forum_title` = '$forum_title'";
$uj_1 = mysqli_query($con, $uj);
$uj_2 = mysqli_num_rows($uj_1);
if($uj_2>0){

	echo 'This title already exists';
}
else{






$ix = "INSERT INTO `forum_post` (`fid`, `username`, `forum_title`, `forum_body`, `forum_pic`, `forum_type`, `forum_time_created`) VALUES (NULL, '$username', '$forum_title', '$forum_body', '$forum_pic', '$forum_type', current_timestamp())";

$b = mysqli_query($con, $ix);
if($b){

	echo '<html>
        <meta http-equiv="refresh" content="0; URL=../" />
        </html>';

}
else{
	echo 'fail to add';
}



	







}


}else{


echo '<script>

window.location.href="./"

</script>';


}









?>