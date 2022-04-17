<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
include_once("conn.php");
if(isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$email =  $_POST['email'];
	$password =$_POST['password'];

	if(empty($name) || empty($password) || empty($email)) {

		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

	} else {
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,pass) VALUES('$name','$email','$password')");
		}
	}
		?>
		<html>
		<head>
			<title>Add Data</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>

		<body>
			<div class="container" style="margin-top:20px;">
  <form class="form-horizontal" method="post" action="insert.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="name">
      </div>
    </div>
    
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pwd" name="email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Password</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pwd" name="password">
			</div>
		</div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"  name="Submit" style="float:right;">Submit</button>
      </div>
    </div>
  </form>
			<a href="index.php" class="btn btn-info" role="button" style="float:right;">View Result</a>
</div>

</body>
</html>
