<?php
defined('ABSPATH') || exit;

global $product;

if (!$product || !$product->is_visible()) {
    return;
}

$product_id = $product->get_id();
$product_name = $product->get_name();
$price_html = $product->get_price_html();

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
$hover_image_id = !empty($gallery_ids) ? $gallery_ids[0] : $main_image_id;

/**
 * MAIN IMAGE HTML
 */
$main_image = $main_image_id
    ? wp_get_attachment_image(
        $main_image_id,
        'woocommerce_full',
        false,
        [
            'class' => 'product-img scale-110 transition-transform',
            'alt' => $product_name,
        ]
    )
    : wc_placeholder_img('woocommerce_thumbnail');

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
            'alt' => $product_name,
        ]
    )
    : wc_placeholder_img('woocommerce_thumbnail');

$terms = get_the_terms($product_id, 'product_cat');
$category = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';
?>

<div class="h-full object-cover product-card rounded overflow-hidden">

    <a href="<?php the_permalink(); ?>" class="block group" data-title="<?php echo esc_attr(get_the_title()); ?>"
        data-price="<?php echo esc_attr($product->get_price_html()); ?>"
        data-description="<?php echo esc_attr(wp_strip_all_tags(get_the_content())); ?>"
        data-image="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">

        <div class="img-container bg-gray-300 relative overflow-hidden">

            <!-- MAIN IMAGE -->
            <?php echo $main_image; ?>

            <!-- HOVER IMAGE -->
            <?php echo $hover_image; ?>

        </div>

        <div class="product-info mt-3 flex flex-col gap-2 text-lg leading-5 md:flex-row md:justify-between">

            <div class="flex w-full justify-between">
                <span class="product-name">
                    <?php echo esc_html($product_name); ?>
                </span>

                <span class="price">
                    <?php echo wp_kses_post($price_html); ?>
                </span>
            </div>

            <?php if ($category): ?>
                <span class="text-sm opacity-70">
                    ⬤ <?php echo esc_html($category); ?>
                </span>
            <?php endif; ?>

        </div>

    </a>

</div>