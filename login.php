<?php
include('db.php');
session_start();
// If form submitted, insert values into the database.

if (isset($_POST['submit'])){
        // removes backslashes
	$username = $_POST['username'];
	$password = $_POST['password'];

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
AND password='$password'";
	$result = mysqli_query($con,$query);

        if(mysqli_num_rows($result) == 1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
	   }
else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }
?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Log In</h1>
<form action = "login.php" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>

</div>
</body>
</html>
