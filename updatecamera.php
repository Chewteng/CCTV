
<?php 

    require_once("db_connect.php");

    if(isset($_POST['update']))
    {
        $CameraID = $_GET['ID'];
        $Address = $_POST['address'];
		$Place = $_POST['place'];
        $Message = $_POST['message'];

        $query = "UPDATE camera SET IPaddress='".$Address."', place = '".$Place."', message = '".$Message."' where cid='".$CameraID."'";
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
			window.location='editCameraDetail.php';
			</script>";
        }
    }
    else
    {
        header("location: editCameraDetail.php");
    }


?>
