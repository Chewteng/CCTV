<?php 
require_once 'core.php';
?>
<?php require_once 'header.php'; ?>

<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<br>
<div class="container">
		<div class="row vertical">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Search ID for delete camera</h3>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="deleteCameraDetail.php" method="get">
							<fieldset>
								<div class="form-group row">
									<label for="GetID" class="col-sm-2 col-form-label">Camera ID:</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="GetID" name="GetID" placeholder="eg:101,102..." />
									</div>
								</div>
							</fieldset>
					</div><!-- panel-body -->
				</div><!-- /panel -->
				<div class="form-group">
					<div class="col-md-offset-5">
						<br>
						<button type="submit" class="btn btn-primary">Search</button>
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