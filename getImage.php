<?php

  $id = $_GET['id'];
  
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "amritindia";

  $conn = new mysqli($servername, $username, $password, $dbname);
  
  $sql = "SELECT image FROM menu WHERE id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $conn->close();

  header("Content-type: image/jpeg");
  echo $row['image'];
?>