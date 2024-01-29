<?php session_start(); ?>

<?php


include "config.php";



$username = mysqli_real_escape_string($con, htmlspecialchars($_POST["username"]));
$password = mysqli_real_escape_string($con, md5($_POST["password"]));



$select = "SELECT * FROM `ropes_users` WHERE `username` = '$username' AND `password` = '$password'";
$select_1 = mysqli_query($con, $select);
$select_2 = mysqli_num_rows($select_1);
if($select_2>0){
	while($info = mysqli_fetch_array($select_1)){

	//lookup page

		session_start();
		$_SESSION['username']=$username;
		echo '<html>
        <meta http-equiv="refresh" content="0; URL=../" />
        </html>';


}
}
else{
	echo 'Incorrect username or password';
}

?>