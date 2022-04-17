
<?php
include_once("conn.php");

$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="jumbotron">
      
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php
			while($res = mysqli_fetch_array($result)) {
				?>

				<tr>
				<td class='bg-danger'> <?php echo $res['name'] ?></td>
				<td class='bg-danger'> <?php echo $res['email'] ?></td>
				<td class='bg-danger'> <?php echo $res['pass'] ?></td>

				<td class='bg-danger'>
				<a href="update.php?id=<?php echo $res['id'] ?>">Edit</a>
				<a href="delete.php?id=<?php echo $res['id'] ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>

				</td>
				</tr>	
				
		<?php
			}
			?>
    </tbody>
  </table>
  <a href="insert.php" class="btn btn-info" role="button" style="float:right;">Add New</a>
</div>
</body>
</html>
