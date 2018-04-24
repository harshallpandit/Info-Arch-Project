<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	session_start();?>
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
    <link href="css/stylecart.css" type="text/css" rel="stylesheet" />
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body><div class="header head">
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
<!--content-->
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Contact</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span></span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-top">
			<div class="col-md-5 contact-map">
			<h5>Google Map</h5>
			<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>

			</div>
			<div class="address">
					      <h4>Address</h4>
					      <p>Amrit India Restaurant</p>
						  <p>124 North Walnut StreetBloomington, IN 47404</p>
						  <p>ph : (812) 650-3812</p>
						  <p>Email : <a href="mailto:example@gmail.com">amritindia@gmail.com</a></p>
					 </div>
			</div>
			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h5>Contact Form</h5>
			<form>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Name </p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Phone number</p>	
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Email</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="col-md-6 contact-grid">
						<p class="your-para">Password</p>
						<input type="Password" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<p class="your-para msg-para">MESSAGE</p>
				<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<div class="send">
						<input type="submit" value="Send " >
					</div>
			</form>
			</div>	
			
			<div class="clearfix"> </div>
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
						<li><a  href="blog.html">Blog</a></li>
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

