<?php 
include("connect.php");

$firstnameErr = $lastnameErr = $emailErr = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["firstname"])) {
	$firstname = "";
$firstnameErr = "First Name is Required";
$error = true;

}else{ 

$firstname = test_input($_POST["firstname"]);
if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
      $firstnameErr = "Only letters"; 
      $error = true;
	 
}
}

if (empty($_POST["lastname"])) {
	$lastname = "";
$lastnameErr = "last Name is Required";
$error = true;
} else {


$lastname = test_input($_POST["lastname"]);	
if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
      $lastnameErr = "Only letters"; 
      $error = true;
}}

if (empty($_POST["email"])) {
	$email = "";
$emailErr = "Email is Required";
$error = true;
} else {


$email = test_input($_POST["email"]);	
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $error = true;
}
}

session_start();
$_SESSION['wrongfirstname'] = $firstname;
$_SESSION['wronglastname'] = $lastname;
$_SESSION['wrongemail'] = $email;
//$_SESSION['backfromadd'] = true;

}
echo $firstnameErr . "<br>" . $lastnameErr . "<br>" . $emailErr;

// $firstname = $_POST['firstname'];
 //$lastname = $_POST['lastname'];
 //$email = $_POST['email'];

if (!$error) {

include("connect.php");
$queryadd = "INSERT INTO emaillist (user_ID, firstname, lastname, email)
VALUES (NULL,'$firstname', '$lastname',  '$email')";
$updatedb = mysqli_query($con,$queryadd);

 mysqli_close($con);

 if ($updatedb) {
 echo "<br>New record created successfully <br> You have added the Username: " .$firstname . " and the Email: " .$email . " to the database.<a  class=\"btn btn-danger\" href=\"../index.php\">go back</a\">" ;
 
$_SESSION['wrongfirstname'] = "";
$_SESSION['wronglastname'] = "";
$_SESSION['wrongemail'] ="";

 }else{
   echo "info could not be added <a  class=\"btn btn-danger\" href=\"../index.php\">go back </a\">";


} 
 

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

//if ($con->query($sql) === TRUE) {
  //  echo "<br>New record created successfully <br> You have added the Username: " .$username . " and the Email: " .$email . " to the database." ;
//} else {
   // echo "Error: " . $sql . "<br>" . $con->error;
//}

//$con->close();
 

?>