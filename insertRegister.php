<?php
$userID = $_POST['userID'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$position = $_POST['position'];

if (!empty($userID) || !empty($name) || !empty($email) || !empty($password) || !empty($position)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webengineering";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From account Where email = ? Limit 1";
     $INSERT = "INSERT Into account (userID, name, email, password, position) values(?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $userID, $name, $email, $password, $position);
      $stmt->execute();
	  echo "<script type='text/javascript'>alert('Register account sucessfully');
			window.location='index.php';
			</script>";	
     } else {
	  echo "<script type='text/javascript'>alert('Someone already account using this email');
			window.location='register.php';
			</script>";	
     }
     $stmt->close();
     $conn->close();
    }
} else {
	echo "<script type='text/javascript'>alert('All field are required');
			window.location='register.php';
			</script>";	
 die();
}
?>