<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_cart');
?>
<section class="container mx-auto py-12">

    <h1 class="text-5xl font-bold mb-10">
        Cart
    </h1>

    <form class="woocommerce-cart-form"
          action="<?php echo esc_url(wc_get_cart_url()); ?>"
          method="post">

        <?php do_action('woocommerce_before_cart_table'); ?>

        <table class="shop_table shop_table_responsive cart w-full">

            <?php do_action('woocommerce_before_cart_contents'); ?>

            <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :

                $_product = $cart_item['data'];

                if ($_product && $_product->exists() && $cart_item['quantity'] > 0) :
            ?>

                <tr>

                    <td>
                        <?php echo $_product->get_image('thumbnail'); ?>
                    </td>

                    <td>
                        <?php echo esc_html($_product->get_name()); ?>
                    </td>

                    <td>
                        <?php
                        echo woocommerce_quantity_input(
                            array(
                                'input_name'  => "cart[$cart_item_key][qty]",
                                'input_value' => $cart_item['quantity'],
                            ),
                            $_product,
                            false
                        );
                        ?>
                    </td>

                    <td>
                        <?php
                        echo WC()->cart->get_product_subtotal(
                            $_product,
                            $cart_item['quantity']
                        );
                        ?>
                    </td>

                    <td>
                        <?php
                        echo sprintf(
                            '<a href="%s">&times;</a>',
                            esc_url(wc_get_cart_remove_url($cart_item_key))
                        );
                        ?>
                    </td>

                </tr>

            <?php
                endif;
            endforeach;
            ?>

            <?php do_action('woocommerce_cart_contents'); ?>

        </table>

        <?php do_action('woocommerce_after_cart_contents'); ?>

        <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>

        <button
            type="submit"
            name="update_cart"
            class="px-6 py-3 bg-black text-white mt-6">
            Update Cart
        </button>

    </form>

    <div class="mt-12">

        <?php woocommerce_cart_totals(); ?>

    </div>

</section>

<?php
do_action('woocommerce_after_cart');