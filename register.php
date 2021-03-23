<?php 
require_once 'header_index.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Register</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="insertRegister.php" method="POST">
							<fieldset>
								<div class="form-group row">
									<label for="userID" class="col-sm-2 col-form-label">User ID:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="userID" name="userID" placeholder=" User ID" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="name" class="col-sm-2 col-form-label">Name:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" placeholder=" Name" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-sm-2 col-form-label">Email:</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder=" Email" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-sm-2 col-form-label">Password:</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="password" name="password" placeholder=" Password" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="Cpassword" class="col-sm-2 col-form-label">Confirm Password:</label>
									<div class="col-sm-10">
										<input type="password" class="form-control" id="Cpassword" name="Cpassword" placeholder=" Confirm Password" required> 
									</div>
								</div>
								<div class="form-group row">
									<label for="position" class="col-sm-2 col-form-label">Position:</label>
									<div class="col-sm-10">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="position" id="position1" value="Manager" required>
											<label class="form-check-label" for="position1">manager</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="position" id="position2" value="Staff" required>
											<label class="form-check-label" for="position2">staff</label>
										</div>		
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-5">
						<br>
						<button type="submit" class="btn btn-primary">Register</button>
						<button type="reset"class="btn btn-primary">Reset</button>
					</div>
				</div>
				</form>
			</div><!-- /col-md-4 -->
			<div class="col-md-6 col-md-offset-5">
				<br><br>
				<p> Have account already?<a href="index.php"> Login </a><p>
				<br> 
			</div>
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>
