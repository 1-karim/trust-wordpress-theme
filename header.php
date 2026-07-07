

  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRUST ECOMMERCE </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('bg-[#e0e2db] text-[#141414]'); ?>>
    <div class="preloader">
      
      <div class="preloader-images">
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
        <div class="preloader-img"><img class="h-full w-full object-cover"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
      </div>
      <div class="preloader-header absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 mix-blend-difference">
      <h1 class="text-[clamp(2rem,10vw,15rem)] uppercase leading-none  text-white">TRUST</h1>
      <div class="preloader-counter absolute left-[calc(100%+1.5rem)] top-[-1.5rem] overflow-hidden">
        <p class="text-[clamp(1rem,1.5vw,2rem)] leading-none text-white">000</p>
      </div>
    </div>
  </div>

  <nav class="fixed left-0 top-0 z-10 flex w-full items-start justify-between px-8 pt-8 mix-blend-difference">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-semibold uppercase text-white">Trust</a>
    </div>
    <div class="nav-links flex gap-8 text-white">
      <a  href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
      <!-- this button should open the woocommerce bag wihtout reloading the page  -->
      <a class="js-cart-count" data-count="<?php echo esc_attr(trust_theme_cart_count()); ?>"
          href="<?php echo esc_url(wc_get_cart_url()); ?>">Bag(0)</a>
    </div>
  </nav>
