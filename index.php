<?php
/* Template Name: homepage */
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.rudhisasmito.com/walls/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2023 13:36:38 GMT -->

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
	<link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

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

<!-- HEADER -->
<?php get_header(); ?>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- BANNER -->
	<?php
	if (get_field('hero')) :
		$sec = get_field('hero');

	?>
		<div id="slides" class="section banner">

			<ul class="slides-container">
				<li>
					<img src="<?= $sec['bacground_image']; ?>" alt="<?= $sec['bacground_image']; ?>">

					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption">
							<h2 class="caption-heading">
								<?= $sec['header']; ?>
							</h2>
							<p class="excerpt"><?= $sec['paragraph']; ?></p>
							<a href="<?= $sec['contact_us_btn']['url']; ?>" class="btn btn-primary" title="LEARN MORE"><?= $sec['contact_us_btn']['title']; ?></a>
						</div>
					</div>
				</li>
				<li>
					<img src="images/slide-2.jpg" alt="">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption right">
							<h2 class="caption-heading">
								Providing Innovative Solution
							</h2>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
							<a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
						</div>
					</div>
				</li>
				<li>
					<img src="images/slide-3.jpg" alt="">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption center">

							<h2 class="caption-heading">
								Make Your Best Future
							</h2>
							<p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
							<a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
						</div>
					</div>
				</li>

			</ul>

			<nav class="slides-navigation">
				<div class="container">
					<a href="#" class="next">
						<i class="fa fa-chevron-right"></i>
					</a>
					<a href="#" class="prev">
						<i class="fa fa-chevron-left"></i>
					</a>
				</div>
			</nav>

		</div>
	<?php endif; ?>


	<!-- ABOUT -->
	<div class="section feature">
		<div class="container">

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="row overlap feature-gutter">

						<?php
						if (get_field('company_goals')) :
							$goals1 = get_field('company_goals');
							$ctaLink = $goals1['cta_link'];
							$goals = $goals1['goals'];
							if ($goals) :
								foreach ($goals as $goal) :
						?>

									<div class="col-sm-4 col-md-4 border-right">
										<!-- BOX 1 -->
										<div class="feature-box-8">
											<div class="media">
												<img src="<?= $goal['image']; ?>" alt="rud" class="img-responsive">
											</div>
											<div class="body">
												<a href="services-detail.html" class="title"><?= $goal['title']; ?></a>
												<p><?= $goal['description']; ?></p>
												<a href="<?= $ctaLink['url']; ?>" class="readmore"><?= $ctaLink['title']; ?></a>
											</div>
										</div>
									</div>
						<?php
								endforeach;
							endif;
						endif;
						?>

					</div>
				</div>
			</div>
			<?php
			if (get_field('hero_banner_2')) :
				$sec = get_field('hero_banner_2');

			?>
				<div class="row">
					<div class="spacer-70"></div>
					<div class="col-sm-5 col-md-5">
						<div class="jumbo-heading">
							<h2><?= $sec['title'] ?></h2>
						</div>
						<p><?= $sec['description'] ?></p>
						<a class="btn btn-secondary" href="<?= $sec['cta_link']['url'] ?>"><?= $sec['cta_link']['title'] ?></a>
						<div class="spacer-30"></div>
					</div>
					<div class="col-sm-7 col-md-7">
						<div class="about-img">
							<div class="about-img-top">
								<div class="hover-img">
									<img src="<?= $sec['image1'] ?>" alt="" class="img-responsive">
								</div>
							</div>
							<div class="about-img-bottom">
								<div class="hover-img">
									<img src="<?= $sec['image2'] ?>" alt="" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="spacer-70"></div>
				</div>
			<?php endif; ?>

		</div>
	</div>

	<!-- SERVICES -->
	<div class="section services">
		<?php
		if (get_field('service')) :
			$sec = get_field('service');

		?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							<?= $sec['title'] ?>
						</h2>
					</div>
				</div>
				<div class="row list-services">
					<!-- Services 1 -->
					<?php
					$services = $sec['services'];
					foreach ($services as $service) :
					?>
						<div class="col-sm-4 col-md-4">
							<div class="box-icon-5">
								<div class="icon">
									<img src="<?= $service['icon'] ?>" alt="icon" />
								</div>
								<div class="body-content">
									<h4 class="title"><?= $service['title'] ?></h4>
									<div class="text"><?= $service['description'] ?></div>
									<a href="<?= $sec['cta_link']['url'] ?>" class="readmore"><?= $sec['cta_link']['title'] ?></a>
								</div>
							</div>
						</div>
					<?php
					endforeach;
					?>

				</div>
			</div>
		<?php
		endif;
		?>
	</div>

	<!-- PROJECTS -->
	<div class="section project bg-dark">
		<?php
		if (get_field('project')) :
			$sec1 = get_field('project');

		?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading white">
							<?= $sec1['title'] ?>
						</h2>
					</div>
					<div class="clearfix"></div>

					<div id="caro-project">
						<!-- Item 1 -->
						<?php
						$projects = $sec1["projects"];
						foreach ($projects as $project) :
						?>
							<div class="item">
								<div class="feature-box-7">
									<div class="media">
										<img src="<?= $project['image'] ?>" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<div class="info-box">
											<div class="text">
												<div class="title"><?= $project['title'] ?></div>
												<p><?= $project['description'] ?> </p>
												<a href="<?= $sec['cta_link']['url'] ?>" class="readmore"><?= $sec['cta_link']['title'] ?></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
						endforeach;
						?>
					</div>

				</div>

			</div>
		<?php
		endif;
		?>

	</div>

	<!-- testimonials -->
	<div class="section testimony">

		<?php
		if (get_field('testimonials')) :
			$sec2 = get_field('testimonials');
		?>
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12">

						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h2 class="section-heading">
									<?= $sec2['title'] ?>
								</h2>
							</div>
						</div>



						<div id="owl-testimony">
							<?php
							$testimonials = $sec2['testimonials'];
							foreach ($testimonials as $testimonial) :
							?>
								<div class="item">
									<div class="testimonial-1">
										<div class="media"><img src="<?= $testimonial['image']['url'] ?>" alt="" class="img-responsive"></div>
										<div class="body">
											<div class="title"><?= $testimonial['names'] ?></div>
											<div class="company"><?= $testimonial['campanys_name'] ?></div>
											<p><?= $testimonial['message'] ?></p>
										</div>
									</div>
								</div>

							<?php
							endforeach;
							?>


						</div>

					</div>

				</div>
			</div>
		<?php
		endif;
		?>
	</div>

	<!-- CTA -->
	<div class="section cta">

		<?php
		if (get_field('quick_note')) :
			$sec3 = get_field('quick_note');

		?>
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
							<div class="body-text">
								<h3><?= $sec3['desc']; ?></h3>
							</div>
							<div class="body-action">
								<a href="<?= $sec3['cta-button']['url']; ?>" class="btn btn-secondary"><?= $sec3['cta-button']['title']; ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<!-- BLOG -->
	<div class="section blog">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading">
						RECENT NEWS
					</h2>
				</div>

				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-1.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">The Best in dolor sit amet
									consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">The Best in dolor sit amet
									consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="images/blog-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="news-detail.html" title="">The Best in dolor sit amet
									consectetur adipisicing elit sed</a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> Aug 24, 2017</span>
								<span class="comments"><i class="fa fa-comment-o"></i> 0 Comments</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- PARTNER -->
	<div class="section stat-client">


		<div class="container">
			<div class="row">
				<?php
				if (get_field('partens')) :
					$sec4 = get_field('partens');
				?>
					<?php
					$partens = $sec4;
					foreach ($partens as $parten) :
					?>
						<div class="col-sm-2 col-md-2">

							<div class="client-img">
								<a href="<?= $parten['image']; ?>"><img src="<?= $parten['image']['url'] ?>" alt="" class="img-responsive"></a>
							</div>
						</div>
					<?php
					endforeach;
					?>

				<?php
				endif;
				?>
			</div>
		</div>


	</div>


	<?php
	get_footer();
	?>