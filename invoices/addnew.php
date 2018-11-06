<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$invid=$_POST['invid'];
		$date=$_POST['date'];
		$cid=$_POST['cid'];
						
		if(!mysqli_query($conn,"insert into INVOICEHEADER values ('$invid', '$date','$cid')"))
			echo 'Failed to add. Make sure INVOICE ID is unique';
	}
	else if(isset($_POST['additem'])){
		$invid=$_POST['invid'];
		$pcode=$_POST['pcode'];
		$quantity=$_POST['quantity'];
		
						
		if(!mysqli_query($conn,"insert into salesorder(INVID,PCODE,QUANTITY) values ('$invid', '$pcode','$quantity')"))
			echo "Failed to add.";
	}
?>
