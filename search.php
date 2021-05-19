     <?php 
     ob_start();
     require_once 'library/lib.php';
     require_once 'classes/crud.php';

     $lib=new Lib;
     $crud=new Crud;

     $id=$crud->displaySearchId($_GET['search']);
     $qt=$crud->displayAllSpecificWithOrder('services','service_type',$id,'id','desc');
     ?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>ARTISIANS DIRECTORY MANAGEMENT SYSTEM</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Banking" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="new/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="new/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="new/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="new/css/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->
<link rel="stylesheet" type="text/css" href="new/css/demo.css"/>
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<!-- navigation -->
<div class="nav-links">	
		<div class="header-w3l">
			<div class="container">
				<a class="navbar-brand" href="index.html"><h1><span>ARTISIANS </span>DIRECTORY MANAGEMENT SYSTEM</h1></a>
				<div class="call-w3l">
					<a href="tel:+2348168472495"><img src="new/images/call.png"></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<div class="w3l-nav">
				<ul class="nav navbar-nav link-effect">
					<li ><a href="index.php">Home</a></li>
					<li><a href="#about" class="scroll">About Us</a></li>
		
					<li class="active"><a href="#gallery" class="scroll">Services</a></li>	
					<li><a href="#contact" class="scroll">Contact Us</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="codecon_half">
				<div class="expSearchBox">
					<div class="expSearchFrom">
						<form>
						<input id="field" type="search" name="search" placeholder="Search here"/>
						<input type="submit" type="submit" name="sub" value="find">
						</form>
						<div class="close">
							<span class="front"></span>
							<span class="back"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
</div>
<!-- //navigation -->




 <!--/gallery-->
 <div class="gallery" id="gallery">
	<div class="container">
		<h3 class="w3l-title"><span>Result</h3>
		<div class="agile_gallery_grids w3-agile">
				<ul class="clearfix demo">
					

<!--  <a href="search.php?id=<?=$v['pid']?>"> -->
					<?php if($qt){
					foreach ($qt as $v) { ?>

						
						<li><a href="view.php?id=<?=$v['id']?>" style="text-decoration: none;">
						<div class="gallery-grid1"><h4><span>  <?=$v['name']?> (<?=$crud->displayNameById('service_type',$v['service_type']);?>)</span> </h4>
							<img src="services_images/<?=$v['image']?>" alt=" " width="350" height="250" />
							<div class="p-mask">
								<h4><span> <?=$v['name']?></span> </h4>
								<p><?=$v['other_data']?>.</p>
							</div>
						</div>
					</a></li>

                
                          <?php  }
                      } else{?>
                      	NO RESULT FOUND
                      <?php }?>
					

				</ul>
			</div>
	</div>
</div>
<!--//gallery-->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- about -->
<div class="about" id="about">
	<div class="container">
		<h3 class="w3l-title"><span>About</span> Us</h3>
		<div class="w3-agileits-about-grids">
			<div class="col-md-5 agile-about-right">
				<img src="new/images/d6.jpg" alt="" />
			</div>
			<div class="col-md-7 agile-about-left">
				<h3 class="w3l-sub">Offering the most </h3>
				<p class="sub-p">Quality Services</p>
				<p class="sub-p2">We are trilled to work towards perfection</p>
				<p class="sub-p3">ARTISIANS DIRECTORY MANAGEMENT SYSTEM provides services efficient and effectively, with the aim of meeting up with customers huddles .</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->


<!-- mail -->
<div class="mail" id="contact">
	<div class="container">
		<h3 class="w3l-title"><span>Contact</span> Us</h3>
		<div class="mail-w3l-agile">
			<div class="col-md-6 col-sm-6 contact-left-w3ls">
				<div class="w3l-cont-mk">
					<img src="new/images/about.png">
				</div>
				<h3>Contact Info</h3>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<p>North Bank, Makurdi</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail-w3">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<p><a href="mailto:info@example.com">info@ARTISIANSDIRECTORY MANAGEMENTsystem.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<p><a href="tel:+2348168472495">+2348168472495</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agileinfo_mail_grid_right">
				<h3>Get In Touch</h3>
				<form action="#" method="post">
					<div class="wthree_contact_left_grid">
						<input type="text" name="Name" placeholder="Name" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="number" placeholder="Phone Number" required="">
					</div>
					<textarea name="Message" placeholder="Message......." required=""></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.5423223755743!2d8.536955314476135!3d7.732151594426781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105081c65a00b225%3A0xa0e547e788801abb!2sFederal%20University%20Of%20Agriculture%2C%20Makurdi!5e0!3m2!1sen!2sng!4v1567690399505!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<!-- //mail -->
<!-- footer -->
<div class="footer-bot">
	<div class="container">
		<div class="logo2">
			<h2><a href="index.html"><span>ARTISIANS </span>DIRECTORY MANAGEMENT SYSTEM</a></h2>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="copy-right">
	<div class="agileinfo_social_icons">
		<ul class="agileits_social_list">
			<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			<li><a href="#" class="w3_agile_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<div class="container">
		<p> &copy; 2021 ARTISIANS DIRECTORY MANAGEMENT SYSTEM. All Rights Reserved </p>
	</div>
</div>
<!-- //footer -->

<!-- js files -->
<!-- js -->
<script type="text/javascript" src="new/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="new/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- js for banner -->
<!-- responsiveslider -->
	<script src="new/js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider3").responsiveSlides({
				auto: true,
				pager:true,
				nav:false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	<!-- //responsiveslider -->
	<!-- stats -->
<script type="text/javascript" src="new/js/numscroller-1.0.js"></script>
<!-- //stats -->
<!-- /js for banner -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="new/js/move-top.js"></script>
<script type="text/javascript" src="new/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script src="new/js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- smooth-scrolling-of-move-up -->
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
<!-- //smooth-scrolling-of-move-up -->  
<!-- video-js -->
<script src="new/js/jquery.vide.min.js"></script>
<!-- //video-js -->
<!--gallery-js -->
<script src="new/js/jquery.picEyes.js"></script>
				<script>
					$(function(){
						//picturesEyes($('.demo li'));
						$('.demo li').picEyes();
					});
				</script>
<!--//gallery-js -->
<!-- //js files -->

</body>
</html>