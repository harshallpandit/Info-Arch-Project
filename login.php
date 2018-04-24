<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  
<title> Amrit India</title>

  <link rel="stylesheet" type="text/css" href="/css/loginstyle.css">
    <link href="css/loginstyle.css" rel="stylesheet">

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
			<h1><a href="index.html"><img src="images/oo.png" alt=""><span>Amrit India</span><img src="images/oo.png" alt=""></a></h1>
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
		
</div>
   
    
    
    <div class="intro">
    
  <div class="header-login">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
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
