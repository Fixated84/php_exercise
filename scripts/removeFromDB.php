<?php
include("connect.php");
 $username = $_POST['username'];
 


$queryremove = "DELETE FROM emaillist WHERE (`username` = '$username')";	 


$updatedb2 = mysqli_query($con,$queryremove);

mysqli_close($con);

if ($updatedb2) {
 echo "<br> record successfully removed <br> You have removed Username: " .$username . " from the database." ;

}else{
  echo "info could not be deleted";

}


?>