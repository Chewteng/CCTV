
<?php 

    require_once("db_connect.php");

    if(isset($_POST['update']))
    {
        $ProductID = $_GET['ID'];
        $ProductName = $_POST['productName'];
		$Type = $_POST['type'];
        $Quantity = $_POST['quantity'];
        $Price = $_POST['price'];

        $query = "UPDATE products SET productName = '".$ProductName."', type='".$Type."', quantity = '".$Quantity."', price = '".$Price."' where pid='".$ProductID."'";
        $result = mysqli_query($connect,$query);

        if($result)
        {
			echo "<script type='text/javascript'>alert('Updated sucessfully');
			window.location='homepage.php';
			</script>";
        }
        else
        {
			echo "<script type='text/javascript'>alert('Please Check Your Query');
			window.location='editProductDetail.php';
			</script>";
        }
    }
    else
    {
        header("location: editProductDetail.php");
    }


?>
