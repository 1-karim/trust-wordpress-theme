<?php
/**
 * WooCommerce Template Wrapper
 *
 * This file provides the main WooCommerce layout wrapper.
 */

defined('ABSPATH') || exit;

get_header();

?>

<main class="woocommerce-page min-h-screen bg-[#e0e2db] text-[#141414] py-24">

    <div class="container mx-auto px-4">

        <?php
        /**
         * WooCommerce content hook
         *
         * This outputs:
         * - Shop archive
         * - Product archive
         * - Single product content
         */
        woocommerce_content();
        ?>

    </div>

</main>


<?php

get_footer();