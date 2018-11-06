<?php
	include('conn.php');
	if(isset($_POST['searchprod'])){
		$pcode=$_POST['pcode'];
		$query = mysqli_query($conn, "SELECT * FROM product_13027 WHERE id = '$pcode'");
		$row = mysqli_fetch_array($query);
		echo json_encode($row);
	}
	else if(isset($_POST['search'])){
		$cid=$_POST['cid'];
		$query = mysqli_query($conn, "SELECT * FROM shop_13027 WHERE id = '$cid'");
		$row = mysqli_fetch_array($query);
		echo json_encode($row);
	}
?>

