<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="new.css" />
<link rel="stylesheet" href="new.css" />
</head>
<body>

<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col">
      <a href="./shop/view.phpHomePage.php" class="w3-button w3-block w3-green">SHOP</a>
    </div>
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
<div >
<p><a href="../index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="../logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" class="w3-table-all" >
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>username</strong></th>
<th><strong>edit</strong></th>
<th><strong>delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
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
