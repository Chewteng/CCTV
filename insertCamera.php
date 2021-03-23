<?php
$IPaddress = $_POST['IPaddress'];
$place = $_POST['place'];
$message = $_POST['message'];

if ( !empty($IP_Address) || !empty($place) || !empty($message)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webengineering";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT IPaddress From camera Where IPaddress = ? Limit 1";
     $INSERT = "INSERT Into camera (IPaddress, place, message) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $IPaddress);
     $stmt->execute();
     $stmt->bind_result($IPaddress);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $IPaddress, $place, $message);
      $stmt->execute();
	  echo "<script type='text/javascript'>alert('New camera inserted sucessfully');
			window.location='homepage.php';
			</script>";	
     } else {
	  echo "<script type='text/javascript'>alert('This IP Address already insert');
			window.location='addCamera.php';
			</script>";	
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "<script type='text/javascript'>alert('All field are required');
			window.location='addCamera.php';
			</script>";	
 die();
}
?>