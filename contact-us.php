<?php
 /* Template Name: contact us */
?>

<!DOCTYPE html>
<html lang="zxx">
  
<!-- Mirrored from html.rudhisasmito.com/walls/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 13:41:54 GMT -->
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
					<div class="title-page">Contact</div>
					<ol class="breadcrumb">
						<li><a href="index.html">Index</a></li>
						<li class="active">Contact Us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTACT -->
	<div class="section contact">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-12">
					<!-- MAPS -->
					<div class="maps-wraper">
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
						</div>
					</div>
					<div class="spacer-90"></div>
				</div>
				<div class="clearfix"></div>
				<div class="col-sm-3 col-md-3">
					<div class="widget download">
						<a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
					</div>
					<div class="widget contact-info-sidebar">
						<div class="widget-title">
							Contact Info
						</div>
						<ul class="list-info">
							<li>
								<div class="info-icon">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div> </li>
							<li>
								<div class="info-icon">
									<span class="fa fa-phone"></span>
								</div>
								<div class="info-text">(0761) 654-123987</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-envelope"></span>
								</div>
								<div class="info-text">info@yoursite.com</div>
							</li>
							<li>
								<div class="info-icon">
									<span class="fa fa-clock-o"></span>
								</div>
								<div class="info-text">Mon - Sat 09:00 - 17:00</div>
							</li>
						</ul>
					</div> 

				</div>
				<div class="col-sm-9 col-md-9">
					<div class="content">
						<p class="section-heading-3">Suspendisse est nunc mollis id elit ac efficitur rutrum mauris. Pellentesque ut orci ac leo dictum viverra ac ac turpis.</p>
						<div class="margin-bottom-30"></div>
						<h3 class="section-heading-2">
							Contact Details
						</h3>
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="form-group">
								<input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="p_email" placeholder="Enter Address..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="p_subject" placeholder="Subject...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-primary">ASK A QUOTE</button>
							</div>
						</form>
						<div class="margin-bottom-50"></div>
						<p><em>Note: Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
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