<?php
defined('ABSPATH') || exit;

get_header();
?>
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
<main class="min-h-screen bg-[#e0e2db] pt-24 text-[#141414]">

    <div class="mx-auto px-4 pb-16 sm:px-6 lg:px-8">

        

        <?php if (have_posts()) : ?>

            <section class="catalogue grid grid-cols-2 lg:grid-cols-4 gap-5">

                <?php while (have_posts()) : the_post(); ?>

                    <?php wc_get_template_part('content', 'product'); ?>
            <!-- inject classes through params here to 4 first elements -->
                <?php endwhile; ?>

            </section>

            <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php else : ?>

            <?php do_action('woocommerce_no_products_found'); ?>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>