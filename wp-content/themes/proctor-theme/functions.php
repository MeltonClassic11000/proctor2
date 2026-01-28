<?php

/* ===============================
   Register Header Menu
================================ */
register_nav_menus([
  'primary_menu' => 'Header Menu',
  'footer_useful' => 'Footer Useful Links',
  'footer_services' => 'Footer Services'
]);

/* ===============================
   Enqueue CSS & JS
================================ */
function theme_assets()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/scss/style.css');
  wp_enqueue_style('header', get_template_directory_uri() . '/assets/scss/header.css');
  wp_enqueue_style('home-hero', get_template_directory_uri() . '/assets/scss/home-heo.css');
  wp_enqueue_style('slider', get_template_directory_uri() . '/assets/scss/infinite-slider.css');
  wp_enqueue_style('half-sections', get_template_directory_uri() . '/assets/scss/half-sections.css');
  wp_enqueue_style('faq', get_template_directory_uri() . '/assets/scss/faq-sec.css');
  wp_enqueue_style('blog', get_template_directory_uri() . '/assets/scss/blog.css');
  wp_enqueue_style('footer', get_template_directory_uri() . '/assets/scss/footer.css');

  if (is_page_template('about.php')) {
    wp_enqueue_style('about-hero', get_template_directory_uri() . '/assets/scss/about-hero.css');
    wp_enqueue_style('certifications-why-choose-us', get_template_directory_uri() . '/assets/scss/certifications-why-choose-us.css');
    wp_enqueue_style('why-choose-us', get_template_directory_uri() . '/assets/scss/why-choose-us.css');
    wp_enqueue_style('featured-blog', get_template_directory_uri() . '/assets/scss/featured-blog.css');
  }

  if (is_page_template('blog.php')) {
    wp_enqueue_style('featured-blog', get_template_directory_uri() . '/assets/scss/featured-blog.css');
  }

  if (is_page_template('contact-us.php')) {
    wp_enqueue_style('contact-sec', get_template_directory_uri() . '/assets/scss/contact-sec.css');
    wp_enqueue_style('contact-card-sec', get_template_directory_uri() . '/assets/scss/contact-card-sec.css');
  }

  wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/assets/js/jquery.js', [], null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery-custom'], null, true);
}

add_action('wp_enqueue_scripts', 'theme_assets');

/* ===============================
   Add class to menu <li>
================================ */
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
  if ($args->theme_location === 'primary_menu') {
    $classes[] = 'menu-links';
  }
  return $classes;
}, 10, 3);
