<?php
session_start();
if (!isset($_SESSION['username'])) {
 header('location:scripts/login.php');
}
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
</div>

 <div class="container">
 	    <div class="row">
        <div class="col-md-6 col-md-offset-3">
<form action="scripts/sendInfoToDB.php" method="POST">
	<label>Add Username and Email to database:</label>
	<div class="input-group input input-group-lg">
		<span class="input-group-addon username" id="sizing-addon1">Username</span>
 <input class="form-control"  type="text"  name="username" placeholder="Username" </input>
</div>
 
<br>
<div  class="input-group input input-group-lg">
	<span class="input-group-addon email" id="sizing-addon1">Email</span>
 <input class="form-control"  type="text"  name="email" placeholder="Email" </input> 
  
</div><br>
  <input type="submit" value="Submit" name="submit" class="btn btn-success"></input>
 
</form>
 
<form action="scripts/removeFromDB.php" method="POST">
<label>Remove Username from database:</label>
<div  class="input-group input input-group-lg">

	<span class="input-group-addon email" id="sizing-addon1">Username</span>
 <input class="form-control"  type="text"  name="username" placeholder="Username" </input> 
  
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
