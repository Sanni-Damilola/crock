<?php session_start(); ?>





<?php


session_start();


if(isset($_SESSION['username'])==true){

include "config.php";



$refid = mysqli_real_escape_string($con, $_POST['refid']);

$y = "DELETE FROM `forum_post` WHERE `fid` = '$refid'";
$y1 = mysqli_query($con, $y);

if($y1){

echo '<font color="green"><b>Topic Deleted...Please wait</b></font>';

echo '<html>
        <meta http-equiv="refresh" content="2; URL=../" />
        </html>';

}
else{

	echo 'Unable to delete this topic';
}













}
else{



echo '<html>
        <meta http-equiv="refresh" content="0; URL=../" />
        </html>';



}

















?>











