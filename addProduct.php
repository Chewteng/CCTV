<?php require_once 'header.php'; ?>

<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row vertical">
			<div class="col-md-7 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Add Product </h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="insertProduct.php" method="POST" id="addProductForm" enctype="multipart/form-data">
							<fieldset>
								<div class="form-group row">
									<label for="productImange" class="col-sm-2 col-form-label">Product Image: </label>
									<div class="col-sm-10">
										<img style="max-height: 200px;max-width: 200px;" id="imagePrev" src="" />  <br><br>
										<input type="file" id="img" name="img" onchange="document.getElementById('imagePrev').src = window.URL.createObjectURL(this.files[0])" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="productName" class="col-sm-2 col-form-label">Product Name: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="productName" name="productName" placeholder=" Product Name" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="type" class="col-sm-2 col-form-label">Type: </label>
									<div class="col-sm-10">
										<select name="type" required>
											<option value="Stationary" >Stationary</option>
											<option value="Home Appliances" >Home Appliances</option>
											<option value="Electronic Gadgets" >Electronic Gadgets</option>
											<option value="Clothing" >Clothing</option>
											<option value="Sports" >Sports</option>	
											<option value="Cosmestics" >Cosmetics</option>
											<option value="Others" >Others</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="quantity" class="col-sm-2 col-form-label">Quantity: </label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="quantity" name="quantity" placeholder=" 1" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="price" class="col-sm-2 col-form-label">Price: RM</label>
									<div class="col-sm-10">
										<input type="number" class="form-control" id="price" name="price" placeholder=" 0.00" required> 
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-4">
						<br>
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-primary">Reset</button>
						</form>
						<button class="btn btn-primary" onClick="window.location.href='homepage.php';">Cancel</button>
					</div>
				</div>
				<br><br>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>