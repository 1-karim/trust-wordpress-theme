<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
  <?php wp_head(); ?>
</head>

<body<?php body_class('bg-[#e0e2db] text-[#141414]'); ?>>
  <?php wp_body_open(); ?>
  <div class="preloader">
    <div class="preloader-images">
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-2.jpg" alt="" /></div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-3.jpg" alt="" /></div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-4.jpg" alt="" /></div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt="" /></div>
      <div class="preloader-img"><img class="h-full w-full object-cover"
          src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-2.jpg" alt="" /></div>
    </div>
    <div class="preloader-header absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 mix-blend-difference">
      <h1 class="text-[clamp(2rem,10vw,15rem)] uppercase leading-none  text-white">TRUST</h1>
      <div class="preloader-counter absolute left-[calc(100%+1.5rem)] top-[-1.5rem] overflow-hidden">
        <p class="text-[clamp(1rem,1.5vw,2rem)] leading-none text-white">000</p>
      </div>
    </div>
  </div>

  <nav
    class="fixed left-0 top-0 z-20 flex w-full items-start justify-between px-4 pt-6 mix-blend-difference sm:px-6 lg:px-8">
    <div class="nav-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-semibold uppercase text-white">Trust</a>
    </div>
    <div class="nav-links flex items-center gap-4 text-sm uppercase text-white sm:gap-6">
      <a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
      <a class="js-cart-count" data-count="<?php echo esc_attr(trust_theme_cart_count()); ?>"
        href="<?php echo esc_url(wc_get_cart_url()); ?>">Bag(0)</a>
    </div>
  </nav>

  <section class="relative h-[70vh] w-full overflow-hidden bg-[#e0e2db] text-[#141414]">
    <div
      class="header absolute left-1/2 top-1/2 flex flex-col w-full px-2 -translate-x-1/2 -translate-y-1/2 justify-center overflow-hidden">
      <h1 class="text-[25vw] font-extrabold uppercase w-full text-center leading-none">Trust</h1>

      <span class="h-1.5 w-0 bg-black header-line">&nbsp;</span>

      <div id="hero-content"
        class="mb-10 grid grid-cols-8 gap-x-6 mt-5 gap-y-10 text-xs font-bold md:grid-cols-16 md:gap-6">
        <div class="col-span-3 md:col-span-4">
          <h2 class="uppercase header-subtitle opacity-0">
            Trust</h2>
        </div>
        <div class="col-span-5 md:col-span-8">
          <h2 class="mb-3 uppercase header-subtitle opacity-0" id="hero-subtitle">
            Why</h2>
          <p id="hero-paragraph" class="text-sm leading-4 tracking-tight md:max-w-[60%] header-subtitle opacity-0">
            Created by the
            ++hellohello team, this store and signature collection celebrates our collective creativity and passion for
            Clothing. Carefully designed.</p>
        </div>
        <div class="col-span-3 flex h-full flex-col justify-between md:col-span-3 header-subtitle opacity-0"><a
            target="_blank" rel="noopener noreferrer" class="link-hover max-w-fit uppercase ">Visit
            ++ website</a>
          <a class="link-hover max-w-fit uppercase" href="/shipping-and-return">Shipping
            Returns</a>
        </div>
        <div class="col-span-5 flex justify-end md:col-span-1 header-subtitle opacity-0">
          ©&nbsp;2026</div>
        <div class="col-span-8 inline-block md:hidden">
          <a class="link-hover max-w-fit link-hover uppercase" href="#">Shipping &amp; Returns</a>
        </div>
      </div>
    </div>
  </section>

  <section class="catalogue grid grid-cols-2 lg:grid-cols-4 gap-5 px-4 mx-auto py-8">
    <div class="h-full object-cover product-card rounded translate-y-full overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-2.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded translate-y-full overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-2.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded translate-y-full overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-3.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded translate-y-full overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-4.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
  </section>
  <section class="catalogue  grid grid-cols-2 lg:grid-cols-4 gap-5 px-4 mx-auto py-8">
    <div class="h-full object-cover product-card rounded  overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="/slide-img-7.jpg" alt="" class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded overflow-hidden">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-4.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-4.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
    <div class="h-full object-cover product-card rounded overflow-hidden  ">
      <div class="img-container bg-gray-300 relative overflow-hidden">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-1.jpg" alt=""
          class=" product-img scale-120  -translate-x-12/10 rotate-2 ">
        <img src="<?php get_template_directory_uri(); ?>/assets/trust-textile/trust-textile-4.jpg" alt=""
          class="product-img-hover ">
      </div>
      <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">
        <div class="flex w-full"><span class="product-name">Kerned Confidence</span><span class="price">$25.00</span>
        </div>
        <span class="flex text-sm w-1/3">⬤ Apparel</span>
      </div>
    </div>
  </section>

  <?php wp_footer(); ?>
  </body>

</html>