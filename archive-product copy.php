<?php get_header(); ?>

<main class="min-h-screen bg-[#e0e2db] pt-24 text-[#141414]">
  <div class="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">
    <div class="mb-8 reveal">
      <p class="text-xs font-semibold uppercase tracking-[0.3em]">Shop</p>
      <h1 class="mt-2 text-3xl font-semibold uppercase sm:text-4xl">Our collection</h1>
      <p class="mt-3 max-w-2xl text-sm leading-6 text-[#2f2f2f]">Dynamic WooCommerce product loop with the same visual language as the landing page.</p>
    </div>

    <?php if (woocommerce_product_loop()) : ?>
      <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <?php while (have_posts()) : the_post(); ?>
          <?php wc_get_template_part('content', 'product'); ?>
        <?php endwhile; ?>
      </div>
      <?php woocommerce_product_loop_end(); ?>
    <?php else : ?>
      <p class="text-sm uppercase">No products found.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
