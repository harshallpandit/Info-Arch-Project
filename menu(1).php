<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	if(!empty($_POST["quantity"])) {
			$code = $_GET['code'];
			$productByCode = mysqli_query($db, "SELECT * FROM menu WHERE id='$code'");
			$itemArray = array($productByCode[0]["id"]=>array('name'=>$productByCode[0]["name"], 'id'=>$productByCode[0]["id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
echo $_SESSION["cart_item"];
?>
<!DOCTYPE html>
<html>
<head>
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
			<h1><a href="index.html"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
		</div>
		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.html">Home</a></li>
						<li><a class="active" href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="typo.html">Codes</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
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
<!--content-->
	<div class="menu">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Menu</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>
						
					</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					
				</div>
				<div class="clearfix"> </div>

			</div>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "amritindia";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "SELECT id, name, description, price FROM menu";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
			    // output data of each row
			    	while($row = $result->fetch_assoc()) {
			 ?>
			<div class="Popular-Restaurants-content">
				<div class="Popular-Restaurants-grids">
				<div class="container">
					<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
						<form method="post" action="menu.php?action=add&code=<?php echo $row["id"] ?>">
						<div class="col-md-3 restaurent-logo">
							<img src="getImage.php?id=<?php echo $row["id"];?>" alt="" width="250" height="250" />
						</div>
						<div class="col-md-2 restaurent-title">
							<div class="logo-title">
								<h4><a href="#"><?php echo $row["name"];?></a>
								</h4>
							</div>
							<div class="rating">
								<span><?php echo $row["description"];?></span>
							</div>
						</div>
						<div class="col-md-7 buy">
							<span>$<?php echo $row["price"]?></span>
							<input type="submit" value="Add to cart" class="btnAddAction" />
						</div>
						<div class="clearfix"></div>
						</form>
							</div>
				</div>
			</div>
		</div>
			<!--div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="getImage.php?id=<?php echo $row["id"];?>" alt="" width="100" height="300" >
							<div class="captn">
								<h4><?php echo $row["name"]?></h4>
								<p>$<?php echo $row["price"]?></p>
								<p><?php echo $row["description"]?></p>
							</div>
						</a>	
											
					</div>
				</div-->
				
								
			</div>
			<?php
								}
							} else {
			    				echo "0 results";
								}
								$conn->close();
						
				?>
			<div class="menu-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me3.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me4.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>	
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me5.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>		
					</div>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="menu-bottom animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me6.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>		
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me7.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>		
					</div>
				</div>
				<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="events.html">
							<img src="images/me8.jpg" alt="" class="img-responsive">
							<div class="captn">
								<h4>Lorem</h4>
								<p>$20.00</p>				
							</div>
						</a>	
					</div>
				</div>
				<div class="clearfix"> </div>				
			</div>
		</div>

<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>					
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
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