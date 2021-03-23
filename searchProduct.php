<?php 
	require_once 'core.php';
?>
<?php 
	require_once 'header.php'; 
	?>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `products` WHERE pid = '$valueToSearch'";
    $search_result = filterTable($query);
    
}else if(isset($_POST['all']))
{
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}
else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "webengineering");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="container">
		<div class="row vertical">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<form class="form-horizontal" action="searchProduct.php" method="post">
							<fieldset>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Product ID:</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="valueToSearch" placeholder="eg:1001,1002" />
									</div >
									<div class="col-sm-4">
										<button type="submit" name="search" class="btn btn-primary">Search</button>
										<button type="submit" name="all" class="btn btn-primary">All</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div><!-- panel-body -->
				</div><!-- /panel -->
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div><!-- container -->
	<div align="center">
		<br><br><br>
			<table align="center">
				<tr>
					<th colspan="5"><h2>Product list</h2></th>
				</tr>
				<t>
					<th>Product ID</th>				
					<th>Product Name</th>
					<th>Type</th>
					<th>Quantity</th>
					<th>Price</th>
				</t>
				<?php 
					while($rows = mysqli_fetch_array($search_result)):
				?>       
				<tr>
					<td><?php echo $rows['pid']; ?></td>
					<td><?php echo $rows['productName']; ?></td>
					<td><?php echo $rows['type']; ?></td>
					<td><?php echo $rows['quantity']; ?></td>
					<td><?php echo $rows['price']; ?></td>
				</tr>
				<?php     
					endwhile;
				?>   
			</table>
			<br>
			<button class="btn btn-primary" onClick="window.location.href='homepage.php';">Back</button>
		<br><br>
	</div>	
</body>
</html>