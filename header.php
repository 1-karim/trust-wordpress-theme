<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TRUST ECOMMERCE </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#e0e2db] text-[#141414] dark:bg-[#141414] dark:text-[#e0e2db]  red:bg-[#e0e2db] transition-colors duration-300'); ?> data-barba="wrapper">
  <div class="preloader">

    <div class="preloader-images">
      <div class="preloader-img">
        <img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" />
      </div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-2.jpg" alt="" />
      </div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-3.jpg" alt="" />
      </div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-4.jpg" alt="" />
      </div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" />
      </div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-textile-2.jpg" alt="" />
      </div>
    </div>
    <div
      class="preloader-header absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2  mix-blend-difference red:mix-blend-normal ">
      <h1 class="text-[clamp(2rem,10vw,15rem)] opacity-0 leading-none invert red:invert-0">
        TRUST
      </h1>
      <div class="preloader-counter absolute left-[calc(100%+1.5rem)] top-[-1.5rem] overflow-hidden">
        <p class="text-[clamp(1rem,1.5vw,2rem)] leading-none invert red:invert-0">000</p>
      </div>
    </div>
  </div>
  <nav class="fixed opacity-0 left-0 top-5 z-10 flex w-full items-start justify-between px-8 pt-5 mix-blend-difference text-2xl">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" >
        <img class="logo opacity-0 w-16 -translate-y-6"
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/trust-textile/trust-logo.png"></a>
    </div>
    <div class="nav-links flex gap-8 mr-36">
      <a class="text-[#ffffff]" href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
      <!-- this button should open the woocommerce bag wihtout reloading the page  -->
      <a class="text-[#ffffff]" data-count="<?php echo esc_attr(trust_theme_cart_count()); ?>"
        href="<?php echo esc_url(wc_get_cart_url()); ?>">Bag(<?php echo esc_attr(trust_theme_cart_count()); ?>)</a>

    </div>
  </nav>

 <div
    class=" flex opacity-0 gap-1 new-toggle-container fixed right-5 top-10  z-10 theme-toggle-container   overflow-hidden">
    <span
      class="absolute opacity-0 top-0 left-0 rounded-full pointer-events-none z-10 h-1 w-1 bg-[#e0e2db] mix-blend-difference"
      style="translate: none; rotate: none; scale: none; border-width: medium; border-style: none;  background-color: rgb(237, 228, 221); transform: translate(7px, 7px);"></span>
    <button
      class="pointer inline-block rounded-full transition-all duration-200 ease-out h-6 w-6 bg-black border  border-[#e0e2db] hover:scale-110 "
      aria-label="Switch to dark theme"></button>
    <button
      class="pointer inline-block rounded-full transition-all duration-200 ease-out bg-[#e0e2db] border border-black h-6 w-6 hover:scale-110 shadow-[inset_0_0_0_0.05em_#ede4dd]"
      aria-label="Switch to light theme"></button>
    <button
      class="pointer inline-block rounded-full transition-all duration-200 ease-out bg-red-500 h-6 w-6 hover:scale-110 shadow-[inset_0_0_0_0.05em_#ff0001]"
      aria-label="Switch to red theme"></button>
  </div>