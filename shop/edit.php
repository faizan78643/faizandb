<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from shop_13027 where id='".$id."'"; 
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

$shop_name =$_REQUEST['shop_name'];
$contact_person =$_REQUEST['contact_person'];
$contact_no =$_REQUEST['contact_no'];
$address =$_REQUEST['address'];
$area =$_REQUEST['area'];
$coordinates=$_REQUEST['coordinates'];
//$submittedby = $_SESSION["username"];
$update="update shop_13027 set shop_name= '$shop_name', contact_person = '$contact_person', contact_no = '$contact_no', address = '$address', area = '$area', coordinates = '$coordinates' where id = '$id'";
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
<p><input type="text" name="shop_name" placeholder="Enter shop_name" 
required value="<?php echo $row['shop_name'];?>" /></p>
<p><input type="text" name="contact_person" placeholder="Enter contact_person" 
required value="<?php echo $row['contact_person'];?>" /></p>
<p><input type="text" name="contact_no" placeholder="Enter contact_no" 
required value="<?php echo $row['contact_no'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter address" 
required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="area" placeholder="Enter area" 
required value="<?php echo $row['area'];?>" /></p>
<p><input type="text" name="coordinates" placeholder="Enter coordinates" 
required value="<?php echo $row['coordinates'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
