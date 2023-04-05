<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username']) && $_SESSION['username'] != "" ) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		
		$sql = "SELECT * FROM users WHERE email=:email";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam('email', $email, PDO::PARAM_STR);
		$stmt->execute();
		$count = $stmt->rowCount();
		// $result = mysqli_query($conn, $sql);
		if (!$count > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
					$pdo->exec($sql);
			// $result = mysqli_query($conn, $sql);
			if ($pdo) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				if(isset($username) && $username != ""){
					$sql = "SELECT * FROM users WHERE username=:username";
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam('username', $username, PDO::PARAM_STR);
					$stmt->execute();
					$count = $stmt->rowCount();
					$row   = $stmt->fetch(PDO::FETCH_ASSOC);
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['id'] = $row['id'];
					$pdo = null;
				}
				header("Location: index.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="post" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
