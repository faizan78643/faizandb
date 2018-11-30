<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="./css/new.css" />
<link rel="stylesheet" href="./css/style.css" />
</head>
<body>


<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    
    <div class="w3-col s3">
      <a href="./user/view.php" class="w3-button w3-block w3-green">USERS</a>
    </div>
    <div class="w3-col s3">
      <a href="./salesperson/view.php" class="w3-button w3-block w3-green">SALESPERSONS</a>
    </div>
    <div class="w3-col s3">
      <a href="./product/view.php" class="w3-button w3-block w3-green">PRODUCTS</a>
    </div>
    <div class="w3-col s3">
      <a href="./shop/view.php" class="w3-button w3-block w3-green">SHOP</a>
    </div>
    <div class="w3-col s3">
      <a href="./invoices/index.php" class="w3-button w3-block w3-green">INVOICES</a>
    </div>
    <div class="w3-col s3">
      <a href="survey.php" class="w3-button w3-block w3-green">SURVEY</a>
    </div>
    <div class="w3-col" align="center">
    <a href="logout.php" class="del_btn";">LOGOUT</a>
    </div>
    
  </div>
</div>

</div>
<?php include('chart.php');?> 
</body>
</html>
