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
	<?php while (have_rows('page_builder')):
		the_row(); ?>
		<?php if (get_row_layout() == 'home_hero_section'): ?>

			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/home-hero.css" type="text/css">
			<section class="hero-sec">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<div class="content-wrapper">
								<?php if (get_sub_field('section_badge')): ?>
									<div class="secondary-btn pt-1 pb-1 mb-3">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/shield-icon.webp"
											width="25" height="28" alt="Icon" loading="lazy">
										<?php the_sub_field('section_badge'); ?>
									</div>
								<?php endif; ?>

								<?php if (get_sub_field('section_title')): ?>
									<h1 class="mb-4"><?php the_sub_field('section_title'); ?></h1>
								<?php endif; ?>

								<?php if (get_sub_field('text_content')): ?>
									<div class="fw-md fs-18 mb-4 content"><?php the_sub_field('text_content'); ?></div>
								<?php endif; ?>

								<?php if (have_rows('icon_list')): ?>
									<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
										<?php while (have_rows('icon_list')):
											the_row(); ?>
											<li class="mb-3"><?php the_sub_field('item_text'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

								<?php if (get_sub_field('contact_form')): ?>
									<div class="d-flex align-items-center flex-wrap gap-2 mb-4">
										<?php the_sub_field('contact_form'); ?>
									</div>
								<?php endif; ?>

								<?php if (have_rows('trust_points')): ?>
									<ul class="list-with-icon d-flex align-items-center gap-4 flex-wrap s3">
										<?php while (have_rows('trust_points')):
											the_row(); ?>
											<li><?php the_sub_field('point_text'); ?></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

							</div>
						</div>

						<div class="col-xl-5">
							<div class="obj-wrapper">

								<?php $hero_image = get_sub_field('hero_image'); ?>
								<?php if ($hero_image): ?>
									<img src="<?php echo esc_url($hero_image['url']); ?>" class="img-fluid" style="max-width: 458px;"
										width="458" height="545" alt="<?php echo esc_attr($hero_image['alt']); ?>">
								<?php endif; ?>

								<?php if (have_rows('floating_badges')): ?>
									<div class="buttons">
										<?php while (have_rows('floating_badges')):
											the_row(); ?>
											<div class="secondary-btn">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/suppoert-icon.webp"
													width="27" height="27" alt="Icon">
												<?php the_sub_field('badge_text'); ?>
											</div>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>

								<?php if (get_sub_field('students_card_text')): ?>
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
		<?php elseif (get_row_layout() == 'logo_slider_section'): ?>
			<link rel="stylesheet" id="hero-css" href="<?= $theme_url ?>/assets/scss/infinite-slider.css" type="text/css">
			<section class="infinite-slider-sec">
				<div class="container">
					<div
						class="content-wrapper d-flex align-items-center justify-content-xl-between justify-content-center text-lg-start text-center gap-3 flex-wrap mb-5">
						<h2 class="mb-0"><?php the_sub_field('main_title'); ?></h2>
						<?php if (get_sub_field('section_badge')): ?>
							<div class="secondary-btn pt-1 pb-1 mb-3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/shield-icon.webp" width="25"
									height="28" alt="Icon" loading="lazy">
								<?php the_sub_field('section_badge'); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<?php if (have_rows('slider')): ?>
					<div class="logo-slider-wrapper">
						<div class="logo-slider top-slider">
							<?php while (have_rows('slider')):
								the_row(); ?>
								<?php $logo = get_sub_field('logo'); ?>
								<div class="slide">
									<?php if ($logo): ?>
										<div class="icon-wrapper mb-3">
											<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
												loading="lazy">
										</div>
									<?php endif; ?>
									<span class="d-block text-center fw-exbold fs-22">
										<?php the_sub_field('title'); ?>
									</span>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

				<?php if (have_rows('slider_reverse')): ?>
					<div class="logo-slider-wrapper">
						<div class="logo-slider bottom-slider">
							<?php while (have_rows('slider_reverse')):
								the_row(); ?>
								<?php $logo = get_sub_field('logo'); ?>
								<div class="slide">
									<?php if ($logo): ?>
										<div class="icon-wrapper mb-3">
											<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"
												loading="lazy">
										</div>
									<?php endif; ?>
									<span class="d-block text-center fw-exbold fs-22">
										<?php the_sub_field('title'); ?>
									</span>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>

			</section>

		<?php elseif (get_row_layout() == 'how_it_work'): ?>

			<section class="how-it-works pb-0">
				<div class="container">

					<?php if (get_sub_field('main_title')): ?>
						<h2 class="text-center"><?php the_sub_field('main_title'); ?></h2>
					<?php endif; ?>

					<?php if (have_rows('custom_card')): ?>
						<div class="row g-4">
							<?php while (have_rows('custom_card')):
								the_row(); ?>
								<?php $icon = get_sub_field('card_icon'); ?>

								<div class="col-md-6 col-lg-4">
									<div class="card-borderd">
										<div class="counter-wrapper">
											<div class="counter">
												<span class="counter-title">Step</span>
												<span class="count"><?php the_sub_field('number'); ?></span>
											</div>
										</div>

										<div class="card-body">
											<?php if ($icon): ?>
												<div class="card-img-wrapper">
													<img src="<?php echo esc_url($icon['url']); ?>" width="120" height="124"
														alt="<?php echo esc_attr($icon['alt']); ?>" loading="lazy">
												</div>
											<?php endif; ?>

											<div class="content-wrapper">
												<span class="card-title">
													<?php the_sub_field('card_title'); ?>
												</span>
												<p class="card-text">
													<?php the_sub_field('card_description'); ?>
												</p>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

				</div>
			</section>
		<?php elseif (get_row_layout() == 'testimonial_section'): ?>

			<section class="reviews-sec">
				<div class="container">

					<div
						class="content-wrapper d-flex align-items-center justify-content-xl-between justify-content-center text-lg-start text-center gap-3 flex-wrap mb-5">
						<?php if (get_sub_field('main_title')): ?>
							<h2 style="max-width:420px;" class="mb-0">
								<?php the_sub_field('main_title'); ?>
							</h2>
						<?php endif; ?>

						<?php if (get_sub_field('description')): ?>
							<p style="max-width:628px;" class="fs-20 mb-0">
								<?php the_sub_field('description'); ?>
							</p>
						<?php endif; ?>
					</div>

					<?php if (have_rows('testimonial_card')): ?>
						<div class="row g-3 mb-5">
							<?php while (have_rows('testimonial_card')):
								the_row(); ?>
								<?php
								$image = get_sub_field('image');
								$name = get_sub_field('name');
								$info = get_sub_field('info');
								$title = get_sub_field('title');
								$desc = get_sub_field('description');
								?>

								<div class="col-md-6 col-lg-4">
									<div class="card-borderd s1">
										<div class="counter-wrapper">
											<div class="counter">
												<?php if ($image): ?>
													<img src="<?php echo esc_url($image['url']); ?>" width="115" height="115"
														alt="<?php echo esc_attr(!empty($image['alt']) ? $image['alt'] : 'Client avatar'); ?>"
														loading="lazy">
												<?php endif; ?>
											</div>
										</div>

										<div class="card-body">
											<div class="card-img-wrapper">
												<div class="client-content">
													<?php if ($name): ?>
														<div class="client-name">
															-
															<?php echo esc_html($name); ?>
														</div>
													<?php endif; ?>
													<?php if ($info): ?>
														<div class="client-info">
															<?php echo esc_html($info); ?>
														</div>
													<?php endif; ?>
													<div class="reviews-icon">
														<?php for ($i = 0; $i < 5; $i++): ?>
															<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon/review-icon.webp'); ?>"
																width="20" height="20" alt="Star rating" loading="lazy">
														<?php endfor; ?>
													</div>
												</div>
											</div>

											<div class="content-wrapper">
												<?php if ($title): ?>
													<span class="card-title s1">
														<?php echo esc_html($title); ?>
													</span>
												<?php endif; ?>
												<?php if ($desc): ?>
													<p class="card-text">
														<?php echo esc_html($desc); ?>
													</p>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php
					$button = get_sub_field('button');
					if ($button && !empty($button['url'])): ?>
						<a href="<?php echo esc_url($button['url']); ?>"
							target="<?php echo (!empty($button['target']) && $button['target'] === '_blank') ? '_blank' : '_self'; ?>"
							rel="<?php echo (!empty($button['target']) && $button['target'] === '_blank') ? 'noopener noreferrer' : ''; ?>"
							class="btn btn-primary mx-auto">
							<?php echo esc_html($button['title'] ?? 'View More'); ?>
						</a>
					<?php endif; ?>

				</div>
			</section>

		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
<?php // No layouts found ?>
<?php endif; ?>


<?php
get_footer();
