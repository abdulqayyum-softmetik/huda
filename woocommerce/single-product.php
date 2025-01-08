<?php

get_header();

// Hook into WooCommerce's template loading process


if (function_exists('render_single_product_template')) {
    // Render custom template using the function
    render_single_product_template('product');
} else {
    woocommerce_content();
}

get_footer();

