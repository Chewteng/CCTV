<?php 

session_start();
require_once 'db_connect.php';

if(!$_SESSION['userID']) {
	header('location: index.php');	
}

if(isset($_SESSION['userID'])){
    $userID = $_SESSION['userID'];

}else{
    header('location: index.php');	
}
?>