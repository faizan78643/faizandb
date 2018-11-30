<?php 
header('Content-Type: application/json');
	session_start();
	include ('db.php');
	$query = mysqli_query($con,"SELECT PCODE,SUM(QUANTITY) from salesorder GROUP BY PCODE");//taking item and adding in array using group by and returning in jason format
	while($row=mysqli_fetch_array($query))
		{
			$data[] = array(
				'PCODE' => $row['PCODE'],
				'QUANTITY' => $row['SUM(QUANTITY)']
			);
		}
		//$data = {"cols":$cols[],"rows":$rows[]};
	print json_encode($data);
?>
