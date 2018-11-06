
<!DOCTYPE html>
<html>
<title>HOME PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="new.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}

</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col">
      <a href="HomePage.php" class="w3-button w3-block w3-green">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="user.php" class="w3-button w3-block w3-green">USERS</a>
    </div>
    <div class="w3-col s3">
      <a href="salesperson.php" class="w3-button w3-block w3-green">SALESPERSONS</a>
    </div>
    <div class="w3-col s3">
      <a href="products.php" class="w3-button w3-block w3-green">PRODUCTS</a>
    </div>
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block w3-green">CUSTOMERS</a>
    </div>
    <div class="w3-col" align="center">
    <a href="HomePage.php?logout='1'" class="del_btn";">LOGOUT</a>
    </div>
    
  </div>
</div>

<!-- Header with image -->



    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">DELTA PAINT SHOP..................................................................................................................2</span></h5>
   



</body>
</html>


<?php 
  session_start(); 

  if (!isset($_SESSION['id'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: test.php');
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['id'])) : ?>
      <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">WELCOME USER NUMBER <?php echo $_SESSION['id']; ?></span></h5>
      
    <?php endif ?>

    <?php 
    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    header("location: HomePage.php");
   }
    ?>

</div>  
		
</body>
</html>