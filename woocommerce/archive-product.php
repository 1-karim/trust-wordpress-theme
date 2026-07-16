<?php
defined('ABSPATH') || exit;

get_header();
?>
<section
  class="relative h-[70vh] w-full overflow-hidden bg-[#e0e2db] text-[#141414] dark:bg-[#141414] dark:text-[#e0e2db] red:text-[#ff0000] transition-colors duration-300">
  <div
    class="header absolute left-1/2 top-11/20 flex flex-col w-full px-2 -translate-x-1/2 -translate-y-1/2 justify-center overflow-hidden">
    <h1 class="text-[25vw] font-extrabold uppercase w-full text-center leading-none">Trust</h1>

    <span
      class="h-1.5 w-0 bg-[#141414]  dark:bg-[#e0e2db] red:bg-[#ff0000] transition-colors duration-300 header-line">&nbsp;</span>

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
<main class="min-h-screen  pt-24  dark:bg-[#141414]  bg-[#e0e2db] text-[#141414]  dark:text-[#e0e2db]">

  <div class="mx-auto px-4 pb-16 sm:px-6 lg:px-8">

    <?php
    $count = 0;
    if (have_posts()): ?>

      <section class="catalogue grid grid-cols-2 lg:grid-cols-4 gap-5">

        <?php while (have_posts()):
          the_post();
          $count++;
          $classes = '';

          if ($count <= 4) {
            $classes = 'translate-y-full';
          } ?>
          <?php wc_get_template_part('content', 'product', ['classes' => $classes]); ?>
        <?php endwhile; ?>

      </section>

      <?php do_action('woocommerce_after_shop_loop'); ?>

    <?php else: ?>

      <?php do_action('woocommerce_no_products_found'); ?>

    <?php endif; ?>

  </div>

</main>
<div id="productModal" class="fixed inset-0 z-50  hidden transition items-center justify-center bg-black/60 p-6">

  <div class="relative w-full max-w-4xl rounded-xl bg-white p-8">

    <button id="closeModal" class="absolute right-5 top-5 text-3xl">
      ×
    </button>

    <div class="grid gap-8 md:grid-cols-2">

      <img id="modalImage" class="w-full rounded-lg object-cover">

      <div>

        <h2 id="modalTitle" class="mb-4 text-3xl font-bold"></h2>

        <div id="modalPrice" class="mb-6 text-xl"></div>

        <p id="modalDescription" class="leading-7"></p>

      </div>

    </div>

  </div>

</div>
<?php get_footer(); ?>