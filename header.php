<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package muhalaenterprises
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'muhalaenterprises' ); ?></a>

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
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">HOME <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">HOMEPAGE 1</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="about-company.html">OUR COMPANY</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="services.html">GENERAL CONTRACTING</a></li>
									
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">PAGES <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li><a href="404page.html">404 PAGE</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">PROJECTS <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="project-grid.html">GRID LAYOUT</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">NEWS <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="news-grid.html">GRID BAR</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
									role="button" aria-haspopup="true" aria-expanded="false">CONTACT <span
										class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="contact-2.html">CONTACT US</a></li>
								</ul>
							</li>

						</ul>

					</nav>

				</div>
			</div>
		</div>

	</div>