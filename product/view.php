<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="../login/index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="../login/logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>product_id</strong></th>
<th><strong>brand</strong></th>
<th><strong>type</strong></th>
<th><strong>shade</strong></th>
<th><strong>size</strong></th>
<th><strong>sales_price</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from product_13027 ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["product_code"]; ?></td>
<td align="center"><?php echo $row["brand"]; ?></td>
<td align="center"><?php echo $row["type"]; ?></td>
<td align="center"><?php echo $row["shade"]; ?></td>
<td align="center"><?php echo $row["size"]; ?></td>
<td align="center"><?php echo $row["sales_price"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>