<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sqli = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($connection, $sqli);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($connection, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/log__sign.css"/>
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login">
            <p class="login__text">Register</p>
            <div class="data">
                <input type="text" name="username" placeholder="Username" class="input-text" value="<?php echo $username; ?>" required>
            </div>  
            <div class="data">
                <input type="email" name="email" placeholder="Email" class="input-text" value="<?php echo $email; ?>" required>
            </div>  
            <div class="data">  
                <input type="password" name="password" placeholder="Password" class="input-text" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="data">  
                <input type="password" name="cpassword" placeholder="Confirm Password" class="input-text" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="data">
                <button class="btn" name="submit">Register</button>
            </div>
            <div class="text">
            <p class="register">If you have an account. </p> <a class="switch" href="lsindex.php">Login Here</a>
            </div>
        </form>
    </div>
</body>
</html>