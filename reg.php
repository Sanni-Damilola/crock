<?php session_start(); ?>

<?php


include "config.php";





$username = mysqli_real_escape_string($con, htmlspecialchars($_POST['username']));
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$surname = mysqli_real_escape_string($con, $_POST['surname']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);




$select = "SELECT * FROM `ropes_users` WHERE `username` = '$username'";
$select_1 = mysqli_query($con, $select);
$select_2 = mysqli_num_rows($select_1);
if($select_2>0){
	echo 'Username is already taken by someone else';
}
else{




$x = "INSERT INTO `userpics` (`userid`, `username`, `userpicx`) VALUES (NULL, '$username', 'images/profile.png')";
$x1 = mysqli_query($con, $x);
if($x1){

}


$dy = "INSERT INTO `ropes_users` (`ruid`, `username`, `password`, `firstname`, `surname`, `gender`, `date_joined`) VALUES (NULL, '$username', '$password', '$firstname', '$surname', '$gender', current_timestamp())";

	$dy_1 = mysqli_query($con, $dy);
	if($dy_1){
		session_start();
		$_SESSION['username']=$username;

		echo '<html>
        <meta http-equiv="refresh" content="0; URL=../getting_started?setupID=phone" />
        </html>';


	}






}
































?>