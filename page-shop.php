<?php
/*
Template Name: Boutique
*/
get_header();

// Le code spécifique à votre boutique WooCommerce va ici
if (class_exists('WooCommerce')) {
    woocommerce_content();
}

get_footer();
?>