<?php require_once 'header.php'; ?>
<?php 
	require_once("db_connect.php");
    $ProductID = $_GET['GetID'];
    $query = " select * from products where pid='".$ProductID."'";
    $result = mysqli_query($connect,$query);

	if($result->num_rows == 1) {
		while($row=mysqli_fetch_assoc($result))
		{
			$ProductID = $row['pid'];
			$ProductName = $row['productName'];
			$Type = $row['type'];
			$Quantity = $row['quantity'];
			$Price = $row['price'];
			$Image = $row['IMG'];
		}
	}
	else {		
		echo "<script type='text/javascript'>alert('Product ID doesnot exists');
		window.location='deleteProduct.php';
		</script>";			
	}
 
?>
<html>
<head>
		<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row vertical">
			<div class="col-md-7 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Delete Product Detail</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal"  action="removeproduct.php?DEL=<?php echo $ProductID ?>" method="POST">
							<fieldset>
								<div class="form-group row">
									<label for="productImange" class="col-sm-2 col-form-label">Product Image: </label>
									<div class="col-sm-10">
										<img style="max-height: 200px;max-width: 200px;"id="imagePrev" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Image); ?>" />  <br><br>
										<input type="file" id="img" name="img" onchange="document.getElementById('imagePrev').src = window.URL.createObjectURL(this.files[0])" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="productID" class="col-sm-2 col-form-label">Product ID: </label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="productID" placeholder=" Product ID " name="productID" value="<?php echo $ProductID ?>">	
									</div>
								</div>
								<div class="form-group row">
									<label for="productName" class="col-sm-2 col-form-label">Product Name: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="productName" placeholder=" Product Name " name="productName" value="<?php echo $ProductName ?>">	
									</div>
								</div>
								<div class="form-group row">
									<label for="type" class="col-sm-2 col-form-label">Type: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="type" placeholder=" type " name="type" value="<?php echo $Type ?>">
									</div>
								</div>
								<div class="form-group row">
									<label for="quantity" class="col-sm-2 col-form-label">Quantity: </label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="quantity" placeholder=" 1 " name="quantity" value="<?php echo $Quantity ?>">
									</div>
								</div>
								<div class="form-group row">
									<label for="price" class="col-sm-2 col-form-label">Price: RM</label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="price" placeholder=" 0.00" name="price" value="<?php echo $Price ?>">
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-4">
						<br>
						<button name="delete" class="btn btn-primary">Delete</button>
						</form>
						<button class="btn btn-primary" onClick="window.location.href='deleteProduct.php';">Cancel</button>
					</div>
				</div>
				<br><br>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>