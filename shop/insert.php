<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    
    $shop_name =$_REQUEST['shop_name'];
    $contact_person = $_REQUEST['contact_person'];
$contact_no = $_REQUEST['contact_no'];
$address = $_REQUEST['address'];
$area = $_REQUEST['area'];
$coordinates = $_REQUEST['coordinates'];
   // $submittedby = $_SESSION["username"];
    $ins_query="insert into shop_13027
    (`shop_name`,`contact_person`,`contact_no`,`address`,`area`,`coordinates`)values
    ('$shop_name','$contact_person','$contact_no','$address','$area','$coordinates')";
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
<p><input type="text" name="shop_name" placeholder="shop_name" required /></p>
<p><input type="text" name="contact_person" placeholder="contact_person" required /></p>
<p><input type="text" name="contact_no" placeholder="Enter contact_no" required /></p>
<p><input type="text" name="address" placeholder="Enter address" required /></p>
<p><input type="text" name="coordinates" placeholder="coordinates" required /></p>
<p><input type="text" name="sales_price" placeholder="Enter sales price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
