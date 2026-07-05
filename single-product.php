<?php get_header(); ?>

<main class="min-h-screen bg-[#e0e2db] pt-24 text-[#141414]">
  <div class="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">
    <?php while (have_posts()) : the_post(); ?>
      <?php global $product; $product = wc_get_product(get_the_ID()); ?>
      <div class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="reveal">
          <?php echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'aspect-[4/5] w-full rounded-xl object-cover')); ?>
        </div>
        <div class="reveal flex flex-col justify-center gap-5">
          <p class="text-xs font-semibold uppercase tracking-[0.3em]">Product</p>
          <h1 class="text-3xl font-semibold uppercase sm:text-4xl"><?php the_title(); ?></h1>
          <div class="text-sm leading-6 text-[#2f2f2f]">
            <?php the_excerpt(); ?>
          </div>
          <div class="text-xl font-semibold"><?php echo wp_kses_post($product->get_price_html()); ?></div>
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
