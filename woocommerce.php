<?php
get_header();

if (class_exists('WooCommerce')) {
    woocommerce_content();
}

get_footer();
