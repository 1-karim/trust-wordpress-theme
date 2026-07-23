<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

add_action('after_setup_theme', function () {
  add_theme_support('woocommerce');
// Optional gallery features

  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
});
function trust_theme_enqueue_assets()
{
  wp_enqueue_style('trust-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
  wp_enqueue_script('trust-theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'trust_theme_enqueue_assets');

function trust_theme_menu()
{
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'trust-shop'),
  ));
}
add_action('init', 'trust_theme_menu');

function trust_theme_cart_count()
{
  if (class_exists('WooCommerce')) {
    return WC()->cart->get_cart_contents_count();
  }

  return 0;
}

function trust_theme_add_cart_count_to_menu($items, $args)
{
  if ($args->theme_location !== 'primary') {
    return $items;
  }

  $count = trust_theme_cart_count();
  $items .= '<li class="ml-4"><a class="uppercase text-sm" href="' . wc_get_cart_url() . '">BAG(' . $count . ')</a></li>';

  return $items;
}
add_filter('wp_nav_menu_items', 'trust_theme_add_cart_count_to_menu', 10, 2);

function trust_theme_products_per_page($cols)
{
  return 8;
}
add_filter('loop_shop_per_page', 'trust_theme_products_per_page', 20);

function trust_theme_wrapper_start()
{
  echo '<div class="mx-auto max-w-7xl px-4 py-12">';
}
function trust_theme_wrapper_end()
{
  echo '</div>';
}
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'trust_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'trust_theme_wrapper_end', 10);



add_action('wp_footer', function() {
    if ( is_shop() ) {
        echo '<!-- THEME PATH: ' . get_stylesheet_directory() . ' -->';
        echo '<!-- WC LOCATE ARCHIVE: ' . wc_locate_template('archive-product.php') . ' -->';
    }
});