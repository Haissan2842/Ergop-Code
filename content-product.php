<?php
/**
 * The template for displaying product content within loops.
 */

// Ensure visibility
if (!defined('ABSPATH')) {
    exit;
}

global $product;

// Output product information and add to cart button
?>
<li <?php wc_product_class(); ?>>
    <h3><?php the_title(); ?></h3>
    <?php do_action('woocommerce_before_shop_loop_item'); ?>
    <a href="<?php the_permalink(); ?>">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        do_action('woocommerce_before_shop_loop_item_title');
        ?>
    </a>
    <?php do_action('woocommerce_shop_loop_item_title'); ?>
    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>
    <?php do_action('woocommerce_after_shop_loop_item'); ?>
</li>
