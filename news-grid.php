<?php
 /* Template Name: news-grid */
?>


<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from html.rudhisasmito.com/walls/news-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 13:41:40 GMT -->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Walls - Construction HTML Template</title>
    <meta name="description" content="Walls - Construction HTML Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="construction, industrial, development, manufacture, engineering, architecture, assembly, build, foundation, infrastructure">
    <meta name="author" content="rudhisasmito.com"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="<?= get_template_directory_uri(); ?>/72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="<?= get_template_directory_uri(); ?>/114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/vendor/magnific-popup.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/style.css" />
	
    <script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">
    	<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6">
						<div class="topbar-left">
							<div class="welcome-text">
							We help the world growing since 1983
							</div>
						</div>
					</div>
					<div class="col-sm-7 col-md-6">
						<div class="topbar-right">
							<ul class="topbar-menu">
								<li><a href="career.html" title="Career">Career</a></li>
								<li><a href="contact-feedback.html" title="Give Feedback">Give Feedback</a></li>
								<li><a href="Contact.html" title="Contact Us">Contact Us</a></li>
							</ul>
							<ul class="topbar-sosmed">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar navbar-main">
		
			<div class="container container-nav">
				<div class="row">
						
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<a class="navbar-brand" href="index.html">
						<img src="images/logo.png" alt="" />
						<img src="images/logo-stiky.png" alt="" class="logo-stiky" />
					</a>

					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="index.html">HOMEPAGE 1</a></li>
								<li><a href="index-2.html">HOMEPAGE 2</a></li>
								<li><a href="index-3.html">HOMEPAGE 3</a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="about-company.html">OUR COMPANY</a></li>
								<li><a href="about-history.html">COMPANY HISTORY</a></li>
								<li><a href="about-team.html">OUR TEAM</a></li>
								<li><a href="about-partners.html">OUR PARTNERS</a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="services.html">GENERAL CONTRACTING</a></li>
								<li><a href="services-2.html">CONSTRUCTION CONSULTANT</a></li>
								<li><a href="services-2.html">DESIGN AND BUILD</a></li>
								<li><a href="services-2.html">HOUSE RENOVATIOn</a></li>
								<li><a href="services-2.html">TILING AND PAINTING</a></li>
								<li><a href="services-2.html">SPECIAL PROJECTS</a></li>
								<li><a href="services-detail.html">SERVICES DETAIL</a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="pricing-table.html">PRICING TABLE</a></li>
								<li><a href="404page.html">404 PAGE</a></li>
								<li><a href="career.html">CAREER</a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="project-grid.html">GRID LAYOUT</a></li>
								<li><a href="project-detail.html">SINGLE PROJECT</a></li>
							  </ul>
							</li>
							<li class="dropdown active">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NEWS <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="news-grid.html">GRID BAR</a></li>
								<li><a href="news-sidebar.html">SIDEBAR</a></li>
								<li><a href="news-detail.html">SINGLE NEWS</a></li>
							  </ul>
							</li>
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="contact-2.html">CONTACT US</a></li>
								<li><a href="contact-quote.html">GET A QUOTE</a></li>
							  </ul>
							</li>

						</ul>

					</nav>
						
				</div>
			</div>
	    </div>

    </div>
 
	<!-- BANNER -->
	<div class="section banner-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">News</div>
					<ol class="breadcrumb">
						<li><a href="index.html">Index</a></li>
						<li class="active">News Grid</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- BLOG -->
	<div class="section why">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<!-- BOX 1 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-1.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Apr 25, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 2 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">Cras malesuada elit leo, id ultrices felis porttitor convallis.</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> May 7, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 3 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">Proin massa sem, tempor eu lacus ut tempor imperdiet purus. Cras at molestie velit.</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> May 20, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 4 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-4.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">Suspendisse vel egestas arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Jun 4, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 5 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-5.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">Morbi lacinia neque vitae ipsum tempus malesuada a id ipsum</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Jun 17, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<!-- BOX 6 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-6.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">Proin massa sem, tempor eu lacus ut, tempor imperdiet purus. Cras at molestie velit.</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Jul 2, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>	

<!-- INFO BOX -->
	<div class="section info overlap-bottom">
		<div class="container">
			<div class="row gutter-20">
				
				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-phone"></i></div>
						<div class="body-content">
							<div class="heading">CALL US NOW</div>
							Office: +62 800 9000 123 <br>
							Mobile: +62 800 9000 123
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-map-marker"></i></div>
						<div class="body-content">
							<div class="heading">COME VISIT US</div>
							99 S.t Jomblo Park Pekanbaru 28292. Indonesia
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<div class="body-content">
							<div class="heading">SEND US A MESSAGE</div>
							General: info@walls.com<br>
							Sales: sales@walls.com
						</div>
					</div>
				</div>
				
			</div>

		</div>
	</div>
	 
	<!-- FOOTER SECTION -->
	<div class="footer">
		
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<img src="images/logo.png" alt="logo bottom" class="logo-bottom">
						<p>This template is a micro niche for business categories, namely Walls - Construction HTML Template. there was an excess of this template is using HTML/CSS.</p>
						<div class="footer-sosmed">
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-facebook"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-twitter"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-instagram"></i>
								</div>
							</a>
							<a href="#" title="">
								<div class="item">
									<i class="fa fa-pinterest"></i>
								</div>
							</a> 
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">
							Recent Post
						</div>
						<ul class="recent-post">
							<li><a href="#" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a>
							<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span></li><li><a href="#" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a>
							<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">
							Our Services
						</div>
						<ul class="list">
							<li><a href="#" title="">General Contracting</a></li>
							<li><a href="#" title="">Construction Consultant</a></li>
							<li><a href="#" title="">Special Projects</a></li>
							<li><a href="#" title="">House Renovation</a></li>
							<li><a href="#" title="">Tiling And Painting</a></li>
							<li><a href="#" title="">Laminate Flooring</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">
							Subscribe
						</div>
						<p>Lit sed The Best in dolor sit amet consectetur adipisicing elit sedconsectetur adipisicing</p>
						<form action="#" class="footer-subscribe">
			              <input type="email" name="EMAIL" class="form-control" placeholder="enter your email">
			              <input id="p_submit" type="submit" value="send">
			              <label for="p_submit"><i class="fa fa-envelope"></i></label>
			              <p>Get latest updates and offers.</p>
			            </form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">&copy; 2017 Walls by Rudhi Sasmito - All Rights Reserved</p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<?php
  get_footer();
?>