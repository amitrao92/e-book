<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['user_id']) &&
    isset($_SESSION['user_email'])) {
	# Database Connection File
	include "../db_conn.php";
	
	$pdo = mysqli_connect('localhost','root','','online_book_store_db');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
			  $query = "UPDATE payment SET `status` = '1' where id='".$id."'";
			 $form = mysqli_query($pdo, $query);
			 if ($form) {
				# success message
				$sm = "Successfully Approved!";
			   header("Location: ../payment-list.php");
			   exit;
			}
	}

}