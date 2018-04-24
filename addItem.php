<?php
	$name = $_POST["name"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); 

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "amritindia";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "insert into menu (name, description, image, price)values('$name', '$description', '{$image}', $price)";
	if(!$conn->query($sql)){
		echo "Failed";
	}
	$conn->close();
	header('Location: editMenu.php');
     exit();
?>