<!DOCTYPE html>
<html>
<head>
<title>E-MEUBEL | Interior & Furniture | Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Majestic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
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
<!---- start-smoth-scrolling---->
</head>
<body>
	<!----start-header---->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/logo-2.png" alt=""></a>
			</div>
			<div class="navigation">
			 <span class="menu"></span> 
				<ul class="navig">
					<li><a href="index.php">Home</a><span> </span></li>
					<li><a href="about.php">About</a><span> </span></li>
					<li><a class="active" href="gallery.php">Commodity</a><span> </span></li>
					<li><a href="contact.php">Contact</a><span> </span></li>
					<?php
					include"koneksi.php";
					if(!isset($_COOKIE['username'])){
					?>
					<li><a href="register.php">Register</a><span> </span></li>
					<li><a href="login.php">Login</a><span> </span></li>
					<?php
					}else{
					?>
					<li><a href="myprofile.php">Profile</a><span> </span></li>
					<?php
					if(isset($_COOKIE['id_suplier'])){
					?>
					<li><a href="orderan.php">Orderan</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="logout.php">Logout</a><span> </span></li>
					<?php
					}
					?>
					<li><a href="cart.php"><img src="images/bag.png" alt="" /></a><span> </span></li>
				</ul>
			</div>
				 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
		</div>
	</div>	
	<!----end-header---->
	<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-bottom a').Chocolat();
		});
		</script>
	<!--gallery-starts--> 
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h1>OUR COMMODITY</h1>
			</div>
			<div class="gallery-bottom">
				<div class="gallery-1">
					<div class="col-md-3 gallery-left">
						<a href="images/port-1.jpg">
							<img class="lazyOwl" src="images/port-1.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-2.jpg">
							<img class="lazyOwl" src="images/port-2.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-5.jpg">
							<img class="lazyOwl" src="images/port-5.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-6.jpg">
							<img class="lazyOwl" src="images/port-6.jpg" alt="name" />
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-left">
						<a href="images/port-3.jpg">
							<img class="lazyOwl" src="images/port-3.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-4.jpg">
							<img class="lazyOwl" src="images/port-4.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-9.jpg">
							<img class="lazyOwl" src="images/port-9.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-10.jpg">
							<img class="lazyOwl" src="images/port-10.jpg" alt="name" />
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-left">
						<a href="images/port-11.jpg">
							<img class="lazyOwl" src="images/port-11.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-12.jpg">
							<img class="lazyOwl" src="images/port-12.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-7.jpg">
							<img class="lazyOwl" src="images/port-7.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/port-8.jpg">
							<img class="lazyOwl" src="images/port-8.jpg" alt="name" />
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>	
	<!----gallery-end---->
	<!--footer-starts--> 
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 footer-left">
					<p>Design by Raka Kurnia N</a></p>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="google"> </span></a></li>
						<li><a href="#"><span class="pin"> </span></a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-left">
					<h3>Address</h3>
					<p>RKN Company 
					<span>Jalan Leuser 28</span>
					(0341) 331 757</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--footer-ends--> 
</body>
</html>
