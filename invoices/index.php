<?php
	include('conn.php');
	include('auth.php');
	session_start();

/*if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}*/
?>
<html lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "style.css" />
		<link rel = "stylesheet" type = "text/css" href = "new.css" />
		<title>SalesOrder</title>
	</head>
<body>
	<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    
    <div class="w3-col s3">
      <a href="../user/view.php" class="w3-button w3-block w3-green">USERS</a>
    </div>
    <div class="w3-col s3">
      <a href="../salesperson/view.php" class="w3-button w3-block w3-green">SALESPERSONS</a>
    </div>
    <div class="w3-col s3">
      <a href="../product/view.php" class="w3-button w3-block w3-green">PRODUCTS</a>
    </div>
    <div class="w3-col s3">
      <a href="../shop/view.php" class="w3-button w3-block w3-green">SHOP</a>
    </div>
    <div class="w3-col s3">
      <a href="./invoices/index.php" class="w3-button w3-block w3-green">INVOICES</a>
    </div>
    <div class="w3-col" align="center">
    <a href="../logout.php" class="del_btn";">LOGOUT</a>
    </div>
    
  </div>
</div>

</div>
	<div style="height:150px;"></div>
	<div class = "row">	
		<div class = "col-md-1">
		</div>
		<div class = "col-md-10 well">
			<div class="row">
                <div class="col-lg-12">
                    	<form  id = "invform" class = "form-horizontal">
						<div class = "form-group">
							<label>CUSTOMER ID</label>
							<?php
									$sql = "SELECT id FROM shop_13027";
									$result = mysqli_query($conn, $sql);
									echo "<select type = 'text' id = 'searchid' class = 'form-control'>";
									echo "<option value= ''>SELECT CUSTOMER</option>";
									while ($row = mysqli_fetch_array($result)) {
										echo "<option value='" . $row['id'] ."'>" . $row['id'] ."</option>";
									}
									echo "</select>";
							?>
						</div>
						<div class = "form-group">
							<div id = "searchinv"></div>
						</div>
					</form>
					<button class="btn btn-success" data-toggle="modal" data-target="#createinvoice"><span class = "glyphicon glyphicon-pencil"></span>ADD NEW INVOICE</button>
					<hr>
					
					<div id="userTable"></div>

					<button class="btn btn-success" id = "add1" data-toggle="modal" data-target="#addentry" disabled="true"><span class = "glyphicon glyphicon-pencil" ></span>ADD ITEM</button>


					<div class="modal fade" id="createinvoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
   						 <div class="modal-content">
						<div class = "modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<center><h3 class = "text-success modal-title">Create Invoice</h3></center>
					</div>
					<div class="modal-body">
					<form  id = "addform" class = "form-horizontal">
						<div class = "form-group">
							<label>INVOICE ID</label>
							<input type  = "text" id = "invid" class = "form-control">
						</div>
						<div class = "form-group">
							<label>DATE</label>
							<input type  = "date" id = "date" class = "form-control">
						</div>
						<div class = "form-group">
							<label>SHOP ID</label>
							<input type  = "text" id = "cid" class = "form-control">
						</div>
						<div class = "form-group">
							<label>SALESPERSON NAME</label>
							<input type  = "text" id = "sname" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>SHOP NAME</label>
							<input type  = "text" id = "cname" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>CONTACT NO.</label>
							<input type  = "text" id = "cno" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>ADDRESS</label>
							<input type  = "text" id = "address" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>AREA</label>
							<input type  = "text" id = "area" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>COORDINATES</label>
							<input type  = "text" id = "gc" class = "form-control" readonly>
						</div>

					</form>
					</div>
				<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="btn btn-success" id="addnew"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>			
</div>
</div>
</div>
</div>
</div>
		<div class="modal fade" id="addentry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
   						 <div class="modal-content">
						<div class = "modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<center><h3 class = "text-success modal-title">Add Entry</h3></center>
					</div>
					<div class="modal-body">
					<form  class = "form-horizontal">
						
						<div class = "form-group">
							<label>ITEM</label>
							<?php
									$sql = "SELECT * FROM product_13027";
									$result = mysqli_query($conn, $sql);
									echo "<select type = 'text' id = 'pcode' class = 'form-control' name='PRODUCT'>";
									echo "<option value= ''>SELECT PRODUCT</option>";
									while ($row = mysqli_fetch_array($result)) {
										echo "<option value='" . $row['id'] ."'>" . $row['brand'] ."</option>";
									}
									echo "</select>";
							?>
						</div>
						<div class = "form-group">
							<label>QUANTITY</label>
							<input type  = "number" id = "quantity" class = "form-control">
						</div>
						<div class = "form-group">
							<label>TOTAL</label>
							<input type  = "number" id = "total" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>TYPE</label>
							<input type  = "text" id = "type" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>SHADE</label>
							<input type  = "text" id = "shade" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>SIZE</label>
							<input type  = "text" id = "size" class = "form-control" readonly>
						</div>
						<div class = "form-group">
							<label>UNIT PRICE</label>
							<input type  = "number" id = "price" class = "form-control" readonly>
						</div>
						
					</form>
					</div>
				<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="btn btn-success" id="additem"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
				</div>
				</div><br>
			
		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>	
<script src = "js/bootstrap.js"></script>

<script type = "text/javascript">
$(document).ready(function(){
		var price = 0;
		$('#searchid').change(function(){
			if ($('#searchid').val() == "")
				$('#searchinvid').prop('disabled', true);
			else
			{
				$('#searchinvid').prop('disabled', false);
				showinvid();
			}
		});
		$('#searchinv').change(function(){
			if ($('#searchinvid').val() == "")
				$('#add1').prop('disabled', true);
			else
			{
				$('#add1').prop('disabled', false);
			}
			show();
		});

$('#quantity').change(function(){
				var total = parseInt(price * $('#quantity').val()); 
   				$('#total').val(total);
});


$('#pcode').change(function(){
			$pcode = $('#pcode').val();
   		
   		$.ajax({
   			type: "POST",
   			url: "search.php",
   			data: {
   				pcode: $pcode,
   				searchprod: 1,
   			},
   			
   			success: function(data)
   			{
   				var obj = JSON.parse(data);
   				$('#shade').val(obj.shade);
   				$('#type').val(obj.type);
   				$('#size').val(obj.size);
   				$('#price').val(obj.sales_price);
   				price = parseInt(obj.sales_price);
   			}
   		});
});

$('#cid').change(function(){
			$cid = $('#cid').val();
   		
   		$.ajax({
   			type: "POST",
   			url: "search.php",
   			data: {
   				cid: $cid,
   				search: 1,
   			},
   			
   			success: function(data)
   			{
   				var obj = JSON.parse(data);
   				$('#cname').val(obj.shop_name);
   				$('#sname').val(obj.contact_person);
   				$('#cno').val(obj.contact_no);
   				$('#address').val(obj.address);
   				$('#area').val(obj.area);
   				$('#gc').val(obj.coordinates);
   			}
   		});
});

$(document).on('click', '#additem', function(){
			if ($('#pcode').val()=="" || $('#quantity').val()=="" || $('#quantity').val()<=0){
				alert('Please input data first');
			}
			else{
			$('#addentry').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$pcode=$('#pcode').val();
			$quantity=$("#quantity").val();
			$invid=$("#searchinvid").val();
			$('#additem').html('Adding..');
			$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						pcode: $pcode,
						invid: $invid,
						quantity: $quantity,
						additem: 1,
					},
					success: function(response){
						$obj = response;
						if($obj != "")
        					alert($obj);
						$('#additem').html('Add');
						show();
						
					}
				});
			}
		});


		//ADD NEW
		$(document).on('click', '#addnew', function(){
			if ($('#cid').val()=="" || $('#invid').val()=="" || isNaN(Date.parse($('#date').val()))){
				alert('Please input data first');
			}
			else{
			$('#createinvoice').modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$cid=$('#cid').val();
			$invid=$("#invid").val();
			$date=$("#date").val();	
			$('#addnew').html('Adding..');
			$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						cid: $cid,
						invid: $invid,
						date: $date,
						add: 1,
					},
					success: function(response){
						$obj = response;
						if($obj != "")
        					alert($obj);
						$('#addnew').html('Add');
						showinvid();
						
					}
				});
			}
		});
		

		//DELETE
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
			$(this).html('Deleting..');
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(response){
						$obj = response;
						if($obj != "")
						{
        					alert($obj);
        					$(this).html('Delete');
						}
        				showinvid();
        				show();
					}
				});
		});

		$(document).on('click', '.deleteitem', function(){
			$id=$(this).val();
			$(this).html('Deleting..');
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						delitem: 1,
					},
					success: function(response){
						$obj = response;
						if($obj != "")
						{
        					alert($obj);
        					$(this).html('Delete');
						}
        				show();
					}
				});
		});

		//UPDATE
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$uquantity=$('#uquantity'+$uid).val();
			//$udiscount=$('#udiscount'+$uid).val();
			$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						quantity: $uquantity,
						edit: 1,
					},
					success: function(){
						show();
					}
				});
		});
	
	});
	
	function showinvid(){
		$searchid = $('#searchid').val();
		$.ajax({
			url: 'searchinvoice.php',
			type: 'POST',
			data:{
				searchid: $searchid,
			},
			success: function(response){
				$('#searchinv').html(response);
			}
		});
	}
	function show(){
		$cid=$('#searchid').val();
		$invid=$('#searchinvid').val();
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			data:{
				invid: $invid,
				cid: $cid,
				show: 1,
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
</script>
<style type="text/css">
	#invform{

		padding: 20px 20px;
		border: 2px solid;
	}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a {
    display: block;
    color: white !important;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none !important;
}

li a:hover:not(.active) {
    background-color: darkblue;
}
#logout-btn:hover{
	background-color: maroon;
}

.active {
    background-color: #0275d8;
}
.active:hover {
    background-color: darkblue;
    border-color: #419641;
}

</style>
</html>
