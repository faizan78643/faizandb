<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from product_13027 where id='".$id."'"; 
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

$product_code =$_REQUEST['product_code'];
$brand =$_REQUEST['brand'];
$type =$_REQUEST['type'];
$shade =$_REQUEST['shade'];
$size =$_REQUEST['size'];
$sales_price=$_REQUEST['sales_price'];
//$submittedby = $_SESSION["username"];
$update="update product_13027 set product_code= '$product_code', brand = '$brand', type = '$type', shade = '$shade', size = '$size', sales_price = '$sales_price' where id = '$id'";
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
<p><input type="text" name="product_code" placeholder="Enter Product code" 
required value="<?php echo $row['product_code'];?>" /></p>
<p><input type="text" name="brand" placeholder="Enter brand" 
required value="<?php echo $row['brand'];?>" /></p>
<p><input type="text" name="type" placeholder="Enter type" 
required value="<?php echo $row['type'];?>" /></p>
<p><input type="text" name="shade" placeholder="Enter shade" 
required value="<?php echo $row['shade'];?>" /></p>
<p><input type="text" name="size" placeholder="Enter size" 
required value="<?php echo $row['size'];?>" /></p>
<p><input type="text" name="sales_price" placeholder="Enter price" 
required value="<?php echo $row['sales_price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
