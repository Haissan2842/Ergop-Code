    <?php
    /*
    Template Name: Boutique
    */
    get_header();

    if (class_exists('WooCommerce')) {
        woocommerce_content();
    }

    get_sidebar();
    get_footer();
    ?> 