<?php
session_start();
if (!isset($_SESSION['username'])) {
 header('location:scripts/login.php');



}


if (!$_SESSION['wrongfirstname'] || !$_SESSION['wronglastname'] || $_SESSION['wrongemail']) {
	
$_SESSION['wrongfirstname'] = "";
$_SESSION['wronglastname'] = "";
$_SESSION['wrongemail'] = "";	

}
//$wrongfirstname = $_SESSION['wrongfirstname'];
//$wronglastname = $_SESSION['wronglastname'];
//$wrongemail = $_SESSION['wrongemail'];
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Exercise</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
 
</head>

<body>

	<div class="page-header">
  <h1>PHP Exercise <small>index.php</small></h1>
  <a href="scripts/logout.php" class="btn btn-danger" style="position: absolute; top:5px; right:5px;">Logout</a>
 

 <div class="container">
 	    <div class="row">
        <div class="col-md-6 col-md-offset-3">
<form action="scripts/sendInfoToDB.php" method="POST">
	<label>Add First Name, Last Name and Email to database:</label>
	<div class="input-group input input-group-lg">
		<span class="input-group-addon username" id="sizing-addon1">First Name</span>
 <input class="form-control"  type="text"   name="firstname" value="<?php  echo  $_SESSION['wrongfirstname'];?>" placeholder="first name" required</input>
</div>
 
<br>
	<div class="input-group input input-group-lg">
		<span class="input-group-addon username" id="sizing-addon1">Last Name</span>
 <input class="form-control"  type="text" value="<?php  echo  $_SESSION['wronglastname'];?>" name="lastname" placeholder="last name" required</input>
</div>
<br>
<div  class="input-group input input-group-lg">
	<span class="input-group-addon email" id="sizing-addon1">Email</span>
 <input class="form-control"  type="text" value="<?php  echo $_SESSION['wrongemail'];?>" name="email" placeholder="Email" required</input> 
  
</div><br>
  <input type="submit" value="Submit" name="submit" class="btn btn-success"></input>
 
</form>
 
<form action="scripts/removeFromDB.php" method="POST">
<label>Remove email from database:</label>
<div  class="input-group input input-group-lg">

	<span class="input-group-addon email" id="sizing-addon1">Email</span>
 <input class="form-control"  type="text"  name="email" placeholder="email" </input> 
  
</div><br>
  <input type="submit" value="Remove" name="submit" class="btn btn-danger"></input>

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
