<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from users where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="../login/index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="../login/logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$username =$_REQUEST['username'];
$password =$_REQUEST['password'];
$admin= $_REQUEST['admin'];


//$submittedby = $_SESSION["username"];
$update="update users set username= '$username', password = '$password',admin='$admin' where id='$id' ";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="username" placeholder="Enter username" 
required value="<?php echo $row['username'];?>" /></p>
<p><input type="text" name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" /></p>
<p><input type="text" name="admin" placeholder="Enter admin" 
required value="<?php echo $row['admin'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
