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
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
			<h1><a href="index.html"><img src="images/oo.png" alt=""><span>Amrit India</span><img src="images/oo.png" alt=""></a></h1>
		</div>
		<!-------- Cart -->
		<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" width="25" height="25" alt=""></h3>
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
						<li><a class="active" href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Location</a></li>
						<li><a  href="typo.html">Login</a></li>
						<li><a  href="events.html">Order</a></li>
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
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Most authentic Indian cuisines in Bloomington.</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Welcome to Amrit India Restaurant!</h4>
			<!--a class="scroll down" href="#content-down"><img src="images/order-now1.png" width="50" height="25" alt=""></a-->
			<br /><br /><br /><br /><br /><br />
			<a class="orderBtn down" href="#">Order Now</a>
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
					<span>Our chef's recommends -<br/></span>
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
<!--services-->
<div class="services">
	<div class="container">
		<div class="services-top">		
			<div class="col-md-8 services-right animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
			</div>
			<div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Services</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span>There are many variations</span>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="service-top">
			<div class="col-md-5 service-top animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-leaf"></a>
						</div>
					</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-star-empty"></a>
						</div>					
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-folder-open"></a>
						</div>					
						</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-home"></a>
						</div>					
						</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
			<div class="col-md-7 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa1.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa2.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top "> 
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//services-->
<!--news-->
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>News</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
				<div class="news-bot">
					<div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item1">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-bot">
					<div class="col-md-6 news-bottom1">
						<a href="single.html">
							<div class="content-item content-item2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item3">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			
			</div>
		</div>
	</div>
<!--//news-->
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