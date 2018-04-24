<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'AmritIndia');
//if (!$db) {
//    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//    exit;
//}
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db,$_POST['lname']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$city = mysqli_real_escape_string($db, $_POST['city']);
$usertype = 'user';
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
 
  if (empty($email)) { array_push($errors, "Email is required"); }
     if (empty($fname)) { array_push($errors, "First Name is required"); }
     if (empty($lname)) { array_push($errors, "Last Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Account for this email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
      
  	$password = $password_1;

  	$query = "INSERT INTO user (email, password,userType,address,city,firstName,lastName) 
  			  VALUES('$email', '$password','$usertype','$address','$city','$fname','$lname')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";

  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {

  	  $_SESSION['username'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
        
   /* $query = "SELECT userType FROM user WHERE email='$email' AND password='$password'"; 
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results, MYSQLI_NUM);
        
  	 if($row[0] == "admin"){
         // header('location: userDash.php');
     }else{header('location: userDash.php');}
    
  	}else {

  	*/
      header('location: index.php');
    	array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>