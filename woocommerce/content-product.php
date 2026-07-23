<?php
defined('ABSPATH') || exit;

global $product;

if ( ! $product || ! $product->is_visible() ) {
    return;
}

$product_id   = $product->get_id();
$product_name = $product->get_name();
$price_html   = $product->get_price_html();

// Extra classes passed in from archive-product.php (e.g. 'translate-y-full')
$extra_classes = isset( $args['classes'] ) ? $args['classes'] : '';

/**
 * MAIN IMAGE
 */
$main_image_id = $product->get_image_id();

/**
 * GALLERY IMAGES
 */
$gallery_ids = $product->get_gallery_image_ids();

/**
 * FIRST GALLERY IMAGE (fallback to main image if empty)
 */
$hover_image_id = ! empty( $gallery_ids ) ? $gallery_ids[0] : $main_image_id;

/**
 * MAIN IMAGE HTML
 */
$main_image = $main_image_id
    ? wp_get_attachment_image(
        $main_image_id,
        'woocommerce_full',
        false,
        [
            'class' => 'product-img scale-120 -translate-x-12/10 rotate-2',
            'alt'   => $product_name,
        ]
    )
    : wc_placeholder_img( 'woocommerce_thumbnail' );

/**
 * HOVER IMAGE HTML
 */
$hover_image = $hover_image_id
    ? wp_get_attachment_image(
        $hover_image_id,
        'woocommerce_full',
        false,
        [
            'class' => 'product-img-hover',
            'alt'   => $product_name,
        ]
    )
    : wc_placeholder_img( 'woocommerce_thumbnail' );

$terms    = get_the_terms( $product_id, 'product_cat' );
$category = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : '';
?>

<div <?php wc_product_class( 'h-full object-cover product-card rounded overflow-hidden ' . $extra_classes, $product ); ?>>

    <div class="img-container bg-gray-300 dark:bg-[#262626] relative overflow-hidden">

        <!-- MAIN IMAGE -->
        <?php echo $main_image; ?>

        <!-- HOVER IMAGE -->
        <?php echo $hover_image; ?>

    </div>

    <div class="product-info mt-3 flex flex-col justify-between gap-2 text-lg leading-5 md:flex-row">

        <div class="flex w-full">
            <span class="product-name"><?php echo esc_html( $product_name ); ?></span>
            <span class="price"><?php echo wp_kses_post( $price_html ); ?></span>
        </div>

        <?php if ( $category ) : ?>
            <span class="flex text-sm w-1/3">⬤ <?php echo esc_html( $category ); ?></span>
        <?php endif; ?>

    </div>

</div>