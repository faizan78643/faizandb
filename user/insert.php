<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    
    $username =$_REQUEST['username'];
    $password = $_REQUEST['password'];

   // $submittedby = $_SESSION["username"];
    $ins_query="insert into users
    (`username`,`password`)values
    ('$username','$password')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="../login/index.php">Home</a> 
| <a href="view.php">View Records</a> 
| <a href="../login/logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="username" placeholder="Enter username" required /></p>
<p><input type="text" name="password" placeholder="password" required /></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>