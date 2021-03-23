<?php require_once 'header.php'; ?>
<?php 
	require_once("db_connect.php");
    $CameraID = $_GET['GetID'];
    $query = " select * from camera where cid='".$CameraID."'";
    $result = mysqli_query($connect,$query);

	if($result->num_rows == 1) {
		while($row=mysqli_fetch_assoc($result))
		{
			$CameraID = $row['cid'];
			$Address = $row['IPaddress'];
			$Place = $row['place'];
			$Message = $row['message'];
		}
	}
	else{		
		echo "<script type='text/javascript'>alert('Camera ID doesnot exists');
			window.location='editCamera.php';
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
						<h3 class="panel-title">Edit Camera Detail</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="updatecamera.php?ID=<?php echo $CameraID ?>" method="POST">						
							<fieldset>
								<div class="form-group row">
									<label for="address" class="col-sm-2 col-form-label">IP Address: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="address" name="address" placeholder=" IP Address" value="<?php echo $Address ?>" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="place" class="col-sm-2 col-form-label">Camera Place: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="place" placeholder=" Camera Place " name="place" value="<?php echo $Place ?>" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="message" class="col-sm-2 col-form-label">Message:</label>
									<div class="col-sm-10">
										<label>Any ???</label> 
										<textarea rows="5" cols="10" class="form-control" id="message" name="message"> 
											<?php echo $Message ?>
										</textarea>	
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
						<button class="btn btn-primary" onClick="window.location.href='editCamera.php';">Cancel</button>
					</div>
				</div>
				<br><br>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>