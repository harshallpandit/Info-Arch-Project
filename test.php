<?php
	$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "amritindia";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT email, items, price FROM amritindia.order";
				$result = $conn->query($sql);
				echo $sql;
				if ($result->num_rows > 0) {
			    // output data of each row
					echo "asd";
			    	while($row = $result->fetch_assoc()) {
			    		echo $row["email"];
			    	}
			    }
?>