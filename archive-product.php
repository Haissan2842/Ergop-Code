<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        wc_get_template_part('content', 'product');
    endwhile;
else :
    echo esc_html('Aucun produit trouvé');
endif;
