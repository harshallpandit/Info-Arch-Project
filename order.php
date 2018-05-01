<?php 
include('odredit.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		echo $id;
		$record = mysqli_query($db, "SELECT * FROM amritindia.order WHERE orderID=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$mail = $n['email'];
			$items = $n['items'];
			$price = $n['price'];
			$date = $n['orderDate'];
			$status = $n['status'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Amrit India Menu</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
    <link href="css/stylecart.css" type="text/css" rel="stylesheet" />
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
	<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><img src="images/oo.png" alt=""><span>Amrit India</span><img src="images/oo.png" alt=""></a></h1>
		</div>
		<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> <?php echo $_SESSION['price'] ?> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> <?php echo count($_SESSION['items']) ?> </span> items)<img src="images/bag.png" width="25" height="25" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="index.php">Home</a></li>
                        
                        <?php 
                        if (!isset($_SESSION['username'])) { ?>
<!--                        //no one logged in-->
                <li><a  href="userDash.php">Login</a></li>    
                <li><a  href="menu.php">Order</a></li>
                <li><a  href="menu.php">Menu</a></li>         
                <li><a  href="contact.php">Contact</a></li>
                        
                         <?php } else{  
                        $email =  $_SESSION['username'];

                            $query = "SELECT userType FROM user WHERE email='$email'"; 
        $db = mysqli_connect('localhost', 'root', 'root', 'AmritIndia');
        $results = mysqli_query($db, $query);
        $row = mysqli_fetch_array($results, MYSQLI_NUM);
                           // echo $row[0];
                          if($row[0] == "admin"){  
                        ?>
  <li><a  href="order.php">Admin Dashboard</a></li>                     
 <li><a href="userDash.php?logout='1'" >Logout</a></li>    
						<li><a  href="menu.php">Menu View</a></li>
       <li><a  href="editMenu.php"> Edit Menu</a></li>       
                <li><a  href="contact.php">Contact</a></li>     
                         <?php } else{?>
  <li><a  href="userDash.php">User Dashboard</a></li>                     
 <li><a href="userDash.php?logout='1'" >Logout</a></li>
                        <li><a  href="menu.php">Order</a></li><li><a  href="menu.php">Menu </a></li>
                <li><a  href="contact.php">Contact</a></li> 
                         <?php }} ?>
						
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
</div>	
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
<?php 
	$results = mysqli_query($db, "SELECT * FROM amritindia.order"); 
?>
	
		<div class="Popular-Restaurants-content">
				<div class="Popular-Restaurants-grids">
				<div class="container">
					<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
						<table class="table table-bordered" style="font-size: 22px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Mail</th>
      <th scope="col">Items</th>
		<th scope="col">Price</th>
		<th scope="col">Date</th>
		<th scope="col">Status</th>
		<th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
	<tbody>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['items']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['orderDate']; ?></td>
			<td><?php echo $row['status']; ?></td>
			<td>
				<a href="order.php?edit=<?php echo $row['orderID']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="odredit.php?del=<?php echo $row['orderID']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
		</tbody>
</table>
<br>
<hr />
<br>
<form method="post" action="odredit.php" style="width: 50%" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="mail" class="form-control" value="<?php echo $mail; ?>">
	</div>
	<div class="form-group">
		<label>Items</label>
		<input type="text" name="items" class="form-control" value="<?php echo $items; ?>">
	</div>
	<div class="form-group">
		<label>Price</label>
		<input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="text" name="status" class="form-control" value="<?php echo $status; ?>">
	</div>
	<div class=form-group">

		<?php if ($update == true): ?>
			<button class="btn btn-primary form-control" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn btn-primary form-control" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>

			
					</div>
				</div>
			</div>
		</div>


<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.php">Home</a></li>
						<li><a  href="menu.php">Menu</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.php">Contact</a></li>
					</ul>					
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>		
	<!--//footer-->
</body>
</html>