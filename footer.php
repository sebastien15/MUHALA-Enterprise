<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package muhalaenterprises
 */

$homepageId = get_page_by_path('home-page')->ID; // Replace 'homepage' with the actual slug of your homepage
?>

<!-- FOOTER SECTION -->
<!-- INFO BOX -->

<div class="section info overlap-bottom">
	<div class="container">
		<?php
		if (get_field('contacts', $homepageId)) :

			$contacts = get_field('contacts', $homepageId);
		?>
			<div class="row gutter-20">



				<?php
				foreach ($contacts as $contact) :
				?>
					<div class="col-sm-4 col-md-4">
						<!-- BOX 1 -->
						<div class="box-icon-4">
							<div class="icon"><i class="fa fa-phone"></i></div>
							<div class="heading"><?= $contact['title'] ?></div>
							<?= $contact['text1'] ?> <br>
							<?= $contact['text2'] ?>
						</div>
					</div>
				<?php
				endforeach;
				?>



			</div>

		<?php endif; ?>

	</div>

</div>
</div>


<div class="footer">
	<div class="container">
		<?php
		if (get_field('footer', $homepageId)) :
			$footer = get_field('footer', $homepageId);
		?>

			<div class="row">

				<div class="col-sm-3 col-md-3">
					<?php
					if (get_field('our_campany', $homepageId)) :

						$our_campany = get_field('our_campany', $homepageId);
					?>

						<div class="footer-item">
							<img src="<?= $our_campany['image']['url'] ?>" alt="logo bottom" class="logo-bottom">
							<p><?= $our_campany['description'] ?></p>
							<div class="footer-sosmed">
								<?php if ($our_campany['social_medias']) : ?>
									<?php
									$social_medias = $sec7['social_medias'];
									foreach ($social_medias as $social_media) :
									?>
										<a href="<?= $sec7['image']['url'] ?>" title="">
											<div class="item">
												<i class="fa <?= $social_media['icon'] ?>"></i>
											</div>
										</a>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>

					<?php endif; ?>
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

			</div>

		<?php endif; ?>
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

</div><!-- #page -->

<!-- JS VENDOR -->
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/jquery.superslides.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/owl.carousel.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/easings.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/isotope.pkgd.min.js"></script>

<!-- sendmail -->
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/validator.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/vendor/form-scripts.js"></script>

<script type='text/javascript' src='<?= get_template_directory_uri(); ?>/https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>

</body>

</html>