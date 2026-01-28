<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proctor-theme
 */
get_header();

$theme_url = get_stylesheet_directory_uri();
?>

<?php if (have_rows('page_builder')): ?>
	<?php while (have_rows('page_builder')) : the_row(); ?>
		<?php if (get_row_layout() == 'home_hero_section') : ?>

			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/home-hero.css" type="text/css">
			<section class="hero-sec">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<div class="content-wrapper">
								<?php if (get_sub_field('section_badge')) : ?>
									<div class="secondary-btn pt-1 pb-1 mb-3">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/shield-icon.webp"
											width="25" height="28" alt="Icon" loading="lazy">
										<?php the_sub_field('section_badge'); ?>
									</div>
								<?php endif; ?>

								<?php if (get_sub_field('section_title')) : ?>
									<h1 class="mb-4"><?php the_sub_field('section_title'); ?></h1>
								<?php endif; ?>

								<?php if (get_sub_field('text_content')) : ?>
									<div class="fw-md fs-18 mb-4 content"><?php the_sub_field('text_content'); ?></div>
								<?php endif; ?>

								<?php if (have_rows('icon_list')) : ?>
									<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
										<?php while (have_rows('icon_list')) : the_row(); ?>
											<li class="mb-3"><?php the_sub_field('item_text'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

								<?php if (get_sub_field('contact_form')) : ?>
									<div class="d-flex align-items-center flex-wrap gap-2 mb-4">
										<?php the_sub_field('contact_form'); ?>
									</div>
								<?php endif; ?>

								<?php if (have_rows('trust_points')) : ?>
									<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
										<?php while (have_rows('trust_points')) : the_row(); ?>
											<li><?php the_sub_field('point_text'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

							</div>
						</div>

						<div class="col-xl-5">
							<div class="obj-wrapper">

								<?php $hero_image = get_sub_field('hero_image'); ?>
								<?php if ($hero_image) : ?>
									<img src="<?php echo esc_url($hero_image['url']); ?>"
										class="img-fluid"
										style="max-width: 458px;"
										width="458" height="545"
										alt="<?php echo esc_attr($hero_image['alt']); ?>">
								<?php endif; ?>

								<?php if (have_rows('floating_badges')) : ?>
									<div class="buttons">
										<?php while (have_rows('floating_badges')) : the_row(); ?>
											<div class="secondary-btn">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/suppoert-icon.webp"
													width="27" height="27" alt="Icon">
												<?php the_sub_field('badge_text'); ?>
											</div>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>

								<?php if (get_sub_field('students_card_text')) : ?>
									<div class="card custom-border">
										<div class="d-flex align-items-center gap-2 mb-3">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mix-images.webp"
												width="129" height="48" alt="Section Image">
											<div class="title fw-semibold">
												<?php the_sub_field('students_card_title'); ?>
											</div>
										</div>
										<p class="mb-0 fs-12">
											<?php the_sub_field('students_card_text'); ?>
										</p>
									</div>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</section>

		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
