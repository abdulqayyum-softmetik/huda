<?php

get_header();

if (function_exists('render_single_product_template')) {
    $post_type = get_post_type();

    // Render custom template
    render_single_product_template($post_type);

} else {
    // Fallback to default WooCommerce template
    woocommerce_content();
}

get_footer();

