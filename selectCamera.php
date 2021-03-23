<?php require_once 'header.php'; ?>

<?php
$con=mysqli_connect("localhost","root","","webengineering");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM camera ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $current=mysqli_num_rows($result);
  $totalPrice = $current * 50;

  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>

<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<br>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
							<fieldset>
								<div class="form-group row">
									<label class="col-sm-5 col-form-label">Current quantity of camera:</label>
									<div class="col-sm-3">
										<label><?php echo $current ?></label>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-5 col-form-label">Current price of service:</label>
									<div class="col-sm-3">
										<label>RM <?php echo $totalPrice ?></label>
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Select quantity for add camera</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="addCamera.php" method="POST">
								<div class="form-group row">
									<div class="col-sm-2 col-form-label"></div>
									<div class="col-sm-10">
										<label>Do u want to add camera??? </label>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-2 col-form-label">
									</div>
									
									<div class="col-sm-10">
									<label for="qty" class="col-sm-3">Quantity: </label>
										<select name="qty" required>
											<option value="1" >1</option>
											<option value="2" >2</option>
											<option value="2" >3</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-2 col-form-label"></div>
									<div class="col-sm-10">
										<label>* Price of camera are RM 50 per each *</label>
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-5">
						<br>
						<button type="submit" name="add" onClick="return addCameraConfirm();" class="btn btn-primary">Add</button>
						</form>
						<script type="text/javascript">
							function addCameraConfirm(){
								var con=confirm('Aditional Charge: You will add RM50 per each camera in service？
								You are add Do u confirm add camera？');
								if(con){
									window.location.href='addCamera.php';
								}
								else{
									window.location.href='selectCamera.php';
								}
								return false;
							}
						</script>
						<button class="btn btn-primary" onClick="window.location.href='homepage.php';">Cancel</button>
					</div>
				</div>
				<br><br><br><br><br><br>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>