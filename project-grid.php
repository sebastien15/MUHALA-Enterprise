<?php
 /* Template Name: project-grid */
?>

<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from html.rudhisasmito.com/walls/project-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 13:41:39 GMT -->
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
    <?php get_header(); ?>
 
	<!-- BANNER -->
	<div class="section banner-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Projects</div>
					<ol class="breadcrumb">
						<li><a href="index.html">Index</a></li>
						<li class="active">Grid Layout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Projects -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<nav class="categories">
					<ul class="portfolio_filter">
						<li><a href="#" class="active" data-filter="*">all</a></li>
						<li><a href="#" data-filter=".eco">Buildings</a></li>
						<li><a href="#" data-filter=".manufacturing">Interior Design</a></li>
						<li><a href="#" data-filter=".industry">Isolation</a></li>
						<li><a href="#" data-filter=".oil">Flooring</a></li>
						<li><a href="#" data-filter=".gas">Renovation</a></li>
					</ul>
				</nav>
				</div>
			</div>
			<div class="row grid-services">
				<div class="col-sm-6 col-md-4 eco manufacturing gas">
					<!-- Item 1 -->
						<div class="feature-box-7">
							<div class="media">
								<img src="images/project-img-1.jpg" alt="rud" class="img-responsive">
							</div>
							<div class="body">
								<div class="info-box">
									<div class="text">
										<div class="title">Building Construction</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
										<a href="project-detail.html" class="readmore">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="col-sm-6 col-md-4 manufacturing gas">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-2.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Architecture</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 industry factory">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-3.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Commercial Building</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 industry factory">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-4.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Inside Renovation</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 industry oil">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-5.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Luxury Apartments</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-6.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Reverview Green Building</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco gas">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-7.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Apartment</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 eco">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-8.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Concrete Building</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. </p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 oil">
					<div class="feature-box-7">
						<div class="media">
							<img src="images/project-img-9.jpg" alt="rud" class="img-responsive">
						</div>
						<div class="body">
							<div class="info-box">
								<div class="text">
									<div class="title">Architectural Design</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been.</p>
									<a href="project-detail.html" class="readmore">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
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