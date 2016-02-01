<?php
$message = "<p></p>";

if($_POST) {

$username = $_POST['username'];
$password = md5($_POST['password']);


include("connect.php");

$query =  "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

$result = mysqli_query($con, $query);

//echo "<br> " . $username . "<br>" .$password;

if (mysqli_num_rows($result)==1) {
 //  echo "<br> username: " . $username . " is in the database";
	session_start();
	$_SESSION['username']= 'true';
header('location:../index.php');

}else {
 $message = "<br><p>Incorrect Username or Password</p>";

}

}



?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Exercise</title>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
 
</head>

<body>

	<div class="page-header">
  <h1>Log In <small>Enter your login details</small></h1>
</div>

 <div class="container">
 	    <div class="row">
        <div class="col-md-6 col-md-offset-3">
<form   method="POST">
	<label>Enter your login details:</label>
	<div class="input-group input input-group-lg">
		<span class="input-group-addon username" id="sizing-addon1">Username</span>
 <input class="form-control"  type="text"  name="username" placeholder="Username" </input>
</div>
 
<br>
<div  class="input-group input input-group-lg">
	<span class="input-group-addon password" id="sizing-addon1">Password</span>
 <input class="form-control"  type="password"  name="password" placeholder="Password" </input> 
  
</div><br>
  <input type="submit" value="Submit" name="submit" class="btn btn-success"></input>
<br>
<br>

 <?php
echo "<p><strong>  $message   </strong></p>";
 ?>

</form>
 
 

            
        </div>
    </div>
</div>
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
