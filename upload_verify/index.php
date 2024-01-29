<?php session_start(); ?>


<?php
session_start();
if(isset($_SESSION['username'])){

    include "../config.php";
   $username = $_SESSION["username"];
  
    $filename = $_FILES['filex']['name'];
    $file_type = $_FILES['filex']['type'];
    $filetmp = $_FILES['filex']['tmp_name'];
    $username = $_SESSION['username'];

    $file_name = $filename;

   

    $dir = '../image_profilepic/'.$filename;

    if(move_uploaded_file($filetmp, $dir)){

        $add_file = "UPDATE `userpics` SET `userpicx` = 'image_profilepic/$filename' WHERE `username` = '$username'";
        $rd = mysqli_query($con, $add_file);
        if($rd){
    
        }

        echo '<script>
    window.location.href="../changephoto"
    </script>';
    
    }
    else{
        echo "error";
    
}
}else{
          echo '<script>

    window.location.href="../"

    </script>';
}


?>