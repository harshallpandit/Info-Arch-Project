<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$_SESSION['items'] = array();
$_SESSION['price'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>Amrit India</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--teme-style-->
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
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
 <div class="header">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.php"><img src="images/oo.png" alt=""><span>Amrit India</span><img src="images/oo.png" alt=""></a></h1>
		</div>
		<!-------- Cart -->
		<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> <?php echo $_SESSION['price'] ?> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> <?php echo count($_SESSION['items']) ?> </span> items)<img src="images/bag.png" width="25" height="25" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
		<!------------>
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
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Most authentic Indian cuisines in Bloomington.</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Welcome to Amrit India Restaurant!</h4>
			<!--a class="scroll down" href="#content-down"><img src="images/order-now1.png" width="50" height="25" alt=""></a-->
			<br /><br /><br /><br /><br /><br />
			<a class="orderBtn down" href="menu.php">Order Now</a>
		</div>
</div>
<!--content-->
<div class="content" id="content-down">
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>About</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>The best in town!</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>Amrit India is a family-owned and operated restaurant just a five minute walk from Indiana University on 4th Street- Restaurant Row. Although the menu features predominantly Northern Indian cuisine, Amrit India also boasts Bloomington's only Southern Indian cuisine as well. 
					<br /><br />
					What attracts college students, localites, and families to our establishment? Bloomington's only Southern Indian cuisine, an overflowing lunch buffet, student discounts, private parking, and all meats are always certified Zibah Halal! You'll have to stop by Amrit India Restaurant, just five minutes from Indiana University Campus, and enjoy ageless cuisine from the other side of the world.</p>
				
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="content-mid">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Chef's Speciality</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Our chef recommends -<br/></span>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					
					<div class=" hover-fold">
					  <h4>Paneer Makhani</h4>
					  <div class="top">
						<div class="front face"></div>
						<div class="back face">
						<p>Paneer makhani is a slightly sweet creamy dish of paneer, in which the gravy is prepared usually with butter (makhan), tomatoes, cashews or cream. </p>
						</div>
					  </div>
					  <div class="bottom"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>Chicken Tikka</h4>
					  <div class="top">
						<div class="front face front1"></div>
						<div class="back face">
						<p>Chicken tikka masala is a dish of chunks of roasted marinated chicken (chicken tikka) in a spiced curry sauce. The sauce is creamy and orange-coloured.</p>
						</div>
					  </div>
					  <div class="bottom bottom1"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>Garlic Naan</h4>
					  <div class="top">
						<div class="front face front2"></div>
						<div class="back face">
						<p>Garlic naan is a flavorful Indian bread. It is cooked on the stovetop, in a cast-iron skillet. It is best served hot on a side of a curry. </p>
						</div>
					  </div>
					  <div class="bottom bottom2"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>Gajar ka Halwa</h4>
					  <div class="top">
						<div class="front face front3"></div>
						<div class="back face">
						<p>Gajar ka Halwa is a carrot-based sweet dessert pudding from the Indian subcontinent.	It is one of the most popular Indian dessert. It is a delight during winter months. </p>
						</div>
					  </div>
					  <div class="bottom bottom3"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>Biryani</h4>
					  <div class="top">
						<div class="front face front4"></div>
						<div class="back face">
						<p>Biryani is a rice-based dish made with spices, rice and mixed with chicken. Biryani was believed to have been invented in the kitchen of Mughal Emperors. It is very popular South Asian cuisine. </p>
						</div>
					  </div>
					  <div class="bottom bottom4"></div>
					</div>
				</div>
				<div class="clearfix"></div>
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
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
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