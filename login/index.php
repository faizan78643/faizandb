<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="../product/view.php">Products</a></p>
<p><a href="../shop/view.php">shop</a></p>
<p><a href="../salesperson/view.php">salesperson</a></p>
<p><a href="../user/view.php">users</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
