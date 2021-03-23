<?php
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "webengineering";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT * From image";
     $INSERT = "INSERT Into image (IMG) values('$imgContent')";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $productName);
     $stmt->execute();
     $stmt->bind_result($productName);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssii", $productName, $type, $quantity, $price);
      $stmt->execute();
	  echo "<script type='text/javascript'>alert('New record inserted sucessfully');
            window.location='addProduct.php';
			</script>";	
     } else {
	  echo "<script type='text/javascript'>alert('This product already insert');
			window.location='addProduct.php';
			</script>";	
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "<script type='text/javascript'>alert('All field are required');
		</script>";	
 die();

?>