<?php 

include 'config/config.php';

error_reporting(0);


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		header("Location: dashboard.php");
	} else {
		echo "<script>alert('Woops! Username atau Password Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<title>DLHK Login</title>
	
      
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light style="background-color: ;">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logo/dlhk_header.jpg" width="400" height="100">
    </a>
</nav>

<hr>
<hr>
<hr>

<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>		
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
		</form>
		
	</div>

	
</body>
</html>