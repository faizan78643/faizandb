<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="new.css" />

</head>
<body>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    
    <div class="w3-col s3">
      <a href="../index.php" class="w3-button w3-block w3-green">HOME</a>
    </div>
    <div class="w3-col s9">
      <a href="insert.php" class="w3-button w3-block w3-green">Insert New Record</a>
    </div>
    <div class="w3-col s9" align="center">
    <a href="../logout.php" class="del_btn";">LOGOUT</a>
    </div>
    
  </div>
</div>

</div>

<h2 style="margin-top: 150px">View Records</h2>
<table width="100%" border="1" class="w3-table-all" >
<thead>
<tr>
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
$sel_query="Select * from product_13027 ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["id"]; ?></td>
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
<?php  } ?>
</tbody>
</table>
</div>
</body>
</html>
