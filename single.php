<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package muhalaenterprises
 */

get_header();
?>
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
						<li class="active">Single Projects</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- PROJECTS -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="widget info-detail">
						<div class="widget-title">
							Project Details
						</div>
						<dl>
							<dt>Client:</dt>
							<dd>Rudhi Sasmito</dd>
							<dt>Location:</dt>
							<dd>Sidoarjo, East Java, ID</dd>
							<dt>Completed:</dt>
							<dd>March, 2016</dd>
							<dt>Website:</dt>
							<dd><a href="http://rudhisasmito.com/demo/petro/">www.petro.com</a></dd>
						</dl>
					</div>
					<div class="widget categories">
						<ul class="category-nav">
							<li><a href="#">Previous Project</a></li>
							<li><a href="#">Next Project</a></li>
						</ul>
					</div> 
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
					<div class="single-page">
						<img src="images/project-detail-2.jpg" alt="" class="img-responsive"> 
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading left">
							Building Construction
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>
						<div class="margin-bottom-50"></div>
						<h2 class="section-heading left">
							What We Do
						</h2>
						<div class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div> 
						<ul class="checklist">
							<li>100% Secure, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</li>
							<li>Easy to claim, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet.</li>
							<li>More benefit nonummy nibh euismod. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						</ul>
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
	<!-- <main id="primary" class="site-main">

		php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'muhalaenterprises' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'muhalaenterprises' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main>#main -->

<?php
get_footer();
