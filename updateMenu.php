<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST["name"];
		$description = $_POST["description"];
		$price = $_POST["price"];
		$id = $_POST["id"];

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "amritindia";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		}	 

		if (!empty($_FILES['image']['tmp_name'])) 
		{
		echo "set";
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$sql = "update menu set name='$name', description='$description', image='{$image}', price=$price where id=$id";
			
			if(!$conn->query($sql)){
				echo "Failed";
			}
		}
		else {
			$sql = "update menu set name='$name', description='$description', price=$price where id=$id";	
			
			if(!$conn->query($sql)){
				echo "Failed";
			}
			
		}
		$conn->close();
		header('Location: editMenu.php');			
	}
?>
