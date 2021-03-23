<?php require_once 'header.php'; ?>
<?php 
	require_once("db_connect.php");
?>

<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Add Camera </h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="insertCamera.php" method="POST">
							<fieldset>
								<div class="form-group row">
									<label for="IPaddress" class="col-sm-2 col-form-label">IP Address: </label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="IPaddress" name="IPaddress" placeholder="IP Address" required> 
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-2 col-form-label"></div>
									<div class="col-sm-10">
										<label>How to check IP Address? Click >>> </label> <a href="https://whatismyipaddress.com/" target="_blank"> More </a>
									</div>
								</div>
								<div class="form-group row">
									<label for="place" class="col-sm-2 col-form-label">Camera Place: </label>
									<div class="col-sm-10">
										<select name="place" required>
											<option value="Door" >Door</option>
											<option value="Mall" >Mall</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="message" class="col-sm-2 col-form-label">Message:</label>
									<div class="col-sm-10">
										<label>Any ???</label> 
										<textarea rows="5" cols="60" class="form-control" id="message" name="message" > 
										</textarea>	
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