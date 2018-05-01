<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'root', 'amritindia');

	$mail = "";
	$items = "";
	$price = 0;
	$date = "";
	$status = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$mail = $_POST['mail'];
		$items = $_POST['items'];
		$price = $_POST['price'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		mysqli_query($db, "INSERT INTO amritindia.order (email, items, price, orderDate, status) VALUES ('$mail','$items', '$price', '$date', '$status')");
		$_SESSION['message'] = "Order added!";
		header('location: order.php');
	}

	if (isset($_POST['update'])) {

		$id = $_POST['id'];
		$mail = $_POST['mail'];
		$items = $_POST['items'];
		$price = $_POST['price'];
		$status = $_POST['status'];
		
		mysqli_query($db, "UPDATE amritindia.order SET email='$mail', items='$items', price='$price', status='$status' WHERE orderID=$id");
		header('location: order.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM amritindia.order WHERE orderID=$id");
	$_SESSION['message'] = "Order deleted!"; 
	header('location: order.php');
}

	$results = mysqli_query($db, "SELECT * FROM amritindia.order");

?>