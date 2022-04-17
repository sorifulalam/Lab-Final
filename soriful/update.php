<?php
include_once("conn.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);

	if(empty($name) || empty($email) || empty($password)) {

		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
	} else {
		$query_update = "UPDATE users SET name='$name',email='$email',pass='$password' WHERE id=$id";
		$result = mysqli_query($mysqli, $query_update);

		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];



$query_data = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($mysqli,$query_data);
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$email = $res['email'];
	$password = $res['pass'];
}
?>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
	<form name="form1" method="post" action="update.php">
		  <table class="table">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" class="form-control" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" class="form-control" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" style="float:right;"></td>
			</tr>
		</table>
	</form>
	<a href="index.php" class="btn btn-info" role="button" style="float:right;">Home Page</a>
</body>
</html>
