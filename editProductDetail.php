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
			window.location='editProduct.php';
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
						<h3 class="panel-title">Edit Product Detail</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="updateproduct.php?ID=<?php echo $ProductID ?>" method="POST">
							<fieldset>
								<div class="form-group row">
									<label for="productImange" class="col-sm-2 col-form-label">Product Image: </label>
									<div class="col-sm-10">
										<img style="max-height: 200px;max-width: 200px;"id="imagePrev" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Image); ?>" />  <br><br>
										<input type="file" id="img" name="img" onchange="document.getElementById('imagePrev').src = window.URL.createObjectURL(this.files[0])" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="productName" class="col-sm-2 col-form-label">Product Name: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="productName" placeholder=" Product Name " name="productName" value="<?php echo $ProductName ?>" required>	
									</div>
								</div>
								<div class="form-group row">
									<label for="type" class="col-sm-2 col-form-label">Type: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="type" placeholder=" type " name="type" value="<?php echo $Type ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="quantity" class="col-sm-2 col-form-label">Quantity: </label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="quantity" placeholder=" 1 " name="quantity" value="<?php echo $Quantity ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="price" class="col-sm-2 col-form-label">Price: RM</label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="price" placeholder=" 0.00" name="price" value="<?php echo $Price ?>" required>
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-4">
						<br>
						<button name="update" class="btn btn-primary">Update</button>
						<button type="reset" class="btn btn-primary">Reset</button>
						</form>
						<button class="btn btn-primary" onClick="window.location.href='editProduct.php';">Cancel</button>
					</div>
				</div>
				<br><br>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>