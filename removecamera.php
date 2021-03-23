
<?php 

    require_once("db_connect.php");

    if(isset($_POST['delete']))
    {
        $CameraID = $_GET['DEL'];
		$query = "DELETE from camera where cid='".$CameraID."'";
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
			window.location='deleteCameraDetail.php';
			</script>";
        }
    }
    else
    {
        header("location: deleteCameraDetail.php");
    }


?>
