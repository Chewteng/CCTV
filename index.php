<?php 
require_once 'db_connect.php';
?>
<?php 
require_once 'header_index.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="login.php" method="POST" id="loginForm">
							<fieldset>
								<div class="form-group row">
									<label for="userID" class="col-sm-2 col-form-label">User ID:</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="userID" name="userID" placeholder="User ID" autocomplete="off" />
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-sm-2 col-form-label">Password:</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-6 col-form-label">
										<div class="form-check">
											<input class="form-check-input" value="lsRememberMe" type="checkbox" id="rememberMe">
											<label class="form-check-label" for="RememberMe">Remember me</label>
										</div>
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-5">
						<br>
						<button type="submit" class="btn btn-primary" onclick="lsRememberMe()">Login</button>
						<button type="reset"class="btn btn-primary">Reset</button>
					</div>
				</div>
				</form>
			</div><!-- /col-md-4 -->
			<div class="col-md-6 col-md-offset-5">
				<br><br>
				<p>	Forget password? </p>
				<p> Don't have an account? <a href="register.php"> Register </a><p>
				<br><br>
			</div>
		</div><!-- /row -->
	</div><!-- container -->	
</body>
</html>
