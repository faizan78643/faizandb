<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    
    $product_code =$_REQUEST['product_code'];
    $brand = $_REQUEST['brand'];
$type = $_REQUEST['type'];
$shade = $_REQUEST['shade'];
$size = $_REQUEST['size'];
$sales_price = $_REQUEST['sales_price'];
   // $submittedby = $_SESSION["username"];
    $ins_query="insert into product_13027
    (`product_code`,`brand`,`type`,`shade`,`size`,`sales_price`)values
    ('$product_code','$brand','$type','$shade','$size','$sales_price')";
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
<p><a href="../index.php">Home</a> 
| <a href="view.php">View Records</a> 
| <a href="../logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action="insert.php"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="product_code" placeholder="product code" required /></p>
<p><input type="text" name="brand" placeholder="brand" required /></p>
<p><input type="text" name="type" placeholder="Enter type" required /></p>
<p><input type="text" name="shade" placeholder="Enter shade" required /></p>
<p><input type="text" name="size" placeholder="Enter size" required /></p>
<p><input type="number" name="sales_price" placeholder="Enter sales price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
