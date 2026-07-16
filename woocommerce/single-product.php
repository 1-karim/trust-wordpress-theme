<?php get_header(); ?>
<?php while (have_posts()):
  the_post(); ?>
  <?php global $product;
  $product = wc_get_product(get_the_ID());
  $product_name = $product->get_name();

  /**
   * MAIN IMAGE HTML
   */
  $main_image_id = $product->get_image_id();

  $main_image = $main_image_id
    ? wp_get_attachment_image(
      $main_image_id,
      'woocommerce_thumbnail',
      false,
      [
        'class' => 'product-img scale-110 transition-transform',
        'alt' => $product_name,
      ]
    )
    : wc_placeholder_img('woocommerce_thumbnail');
  ?>


  <main class="min-h-screen dark:bg-[#141414] dark:text-[#e0e2db] pt-24 text-[#141414]">
    <div class="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">
      <div class="">
        <div class="max-w-7xl mx-auto px-6 py-12">

          <div class="grid lg:grid-cols-2 gap-16">

            <!-- LEFT : Scrollable Gallery -->
            <div class="space-y-6 overflow-y-auto h-screen pr-2">
              <?php echo $main_image; ?>

            </div>

            <!-- RIGHT : Sticky Product Info -->
            <div class="sticky top-10 self-start">

              <p class="text-sm uppercase tracking-widest text-gray-500">
                Category
              </p>

              <h1 class="text-4xl font-bold mt-2">
                <?php the_title(); ?>
              </h1>

              <p class="text-3xl font-semibold mt-6">
                $<?php echo wp_kses_post($product->get_price_html()); ?>
              </p>

              <p class="text-gray-600 mt-8 leading-relaxed">
                description is :<?php the_excerpt(); ?>
              </p>

              <div class="mt-10 space-y-3 text-sm">

                <div class="flex justify-between border-b pb-2">
                  <span class="text-gray-500">SKU</span>
                  <span>BP-1023</span>
                </div>

                <div class="flex justify-between border-b pb-2">
                  <span class="text-gray-500">Material</span>
                  <span>Leather</span>
                </div>

                <div class="flex justify-between border-b pb-2">
                  <span class="text-gray-500">Availability</span>
                  <span class="text-green-600">In Stock</span>
                </div>

              </div>

              <div class="flex items-center gap-4 mt-10">

                <input type="number" value="1" min="1" class="w-20 border rounded-lg px-3 py-3 text-center">

                <button class="flex-1 bg-black text-white py-3 rounded-lg hover:bg-gray-800 transition">
                  Add to Cart
                </button>

              </div>

              <button class="w-full mt-4 border py-3 rounded-lg hover:bg-gray-100 transition">
                Buy Now
              </button>

            </div>

          </div>

        </div>
      </div>


    </div>
  </main>
<?php endwhile; ?>











<?php get_footer(); ?>