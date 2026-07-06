<?php
defined('ABSPATH') || exit;

get_header();
?>

<main class="min-h-screen bg-[#e0e2db] pt-24 text-[#141414]">

    <div class="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">

        

        <?php if (have_posts()) : ?>

            <section class="catalogue grid grid-cols-2 lg:grid-cols-4 gap-5">

                <?php while (have_posts()) : the_post(); ?>

                    <?php wc_get_template_part('content', 'product'); ?>

                <?php endwhile; ?>

            </section>

            <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php else : ?>

            <?php do_action('woocommerce_no_products_found'); ?>

        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>