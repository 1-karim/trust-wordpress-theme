<?php
defined('ABSPATH') || exit;

?>
<section class="catalogue grid grid-cols-2 lg:grid-cols-4 gap-5 px-4 mx-auto py-8" style="border: 10px solid red;">
        <?php
        if ( have_posts() ) :

            $count = 0;

            while ( have_posts() ) :
                the_post();
                $count++;

                $classes = ($count < 5) ? 'translate-y-full' : '';

                wc_get_template_part( 'content', 'product', [ 'classes' => $classes ] );

            endwhile;

        endif;
        ?>

    </section>

<?php


do_action( 'woocommerce_after_shop_loop' );

if ( ! woocommerce_product_loop() ) :
    do_action( 'woocommerce_no_products_found' );
endif;