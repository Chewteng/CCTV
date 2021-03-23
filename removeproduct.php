
<?php 

    require_once("db_connect.php");

    if(isset($_POST['delete']))
    {
        $ProductID = $_GET['DEL'];
		$query = "DELETE from products where pid='".$ProductID."'";
        $result = mysqli_query($connect,$query);

		if($result)
        {
			echo "<script type='text/javascript'>alert('Delete sucessfully');
			window.location='homepage.php';
			</script>";
        }
        else
        {
			echo "<script type='text/javascript'>alert('Please Check Your Query');
			window.location='deleteProductDetail.php';
			</script>";
        }
    }
    else
    {
        header("location: deleteProductDetail.php");
    }


?>
