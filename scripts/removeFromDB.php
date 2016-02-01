<?php
include("connect.php");
 $email = $_POST['email'];
 


$queryremove = "DELETE FROM emaillist WHERE (`email` = '$email')";	 


$updatedb2 = mysqli_query($con,$queryremove);

mysqli_close($con);

if ($updatedb2) {
 echo "<br> record successfully removed <br> You have removed Username: " .$email . " from the database." ;

}else{
  echo "info could not be deleted";

}


?>