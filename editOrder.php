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
		$price = (int)$_POST['price'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		mysqli_query($db, "INSERT INTO order (mail, items, price, date, status) VALUES ('$mail','$items', '$price', '$date', '$status')");
		$_SESSION['message'] = "Order added!";
		header('location: order.php');
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$mail = $_POST['mail'];
		$items = $_POST['items'];
		$price = (int)$_POST['price'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		mysqli_query($db, "UPDATE order SET mail='$mail', items='$items', price='$price', date='$date', status='$status' WHERE id=$id");
		$_SESSION['message'] = "Order updated!";
		header('location: order.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM order WHERE id=$id");
	$_SESSION['message'] = "Order deleted!"; 
	header('location: order.php');
}

	$results = mysqli_query($db, "SELECT * FROM order");

?>