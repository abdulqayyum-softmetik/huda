<?php

// The AJAX function
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');
// Check if function already exists to avoid redeclaration error
if ( !function_exists('data_fetch') ) {
    function data_fetch() {
        $the_query = new WP_Query(array(
            'posts_per_page' => 4,
            's' => esc_attr( $_POST['keyword'] ),
            'post_type' => array('post', 'product') // Include both posts and products
        ));
        
        if ( $the_query->have_posts() ) :
            echo '<div class="search-wrapper">';
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <article class="search">
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php 
                        // Check if WooCommerce product image function exists for better compatibility
                        if ( function_exists( 'woocommerce_get_product_thumbnail' ) && get_post_type() === 'product' ) {
                            echo woocommerce_get_product_thumbnail(); 
                        } else {
                            huda_post_thumbnail('medium'); 
                        }
                        ?>
                    </a>
                    <div class="post-content d-flex flex-column">
                        <a href="<?php echo esc_url( get_permalink() ); ?>"> 
                            <?php the_title(); ?> 
                        </a>
                        <p class="post-excerpt">
                            <?php 
                                echo esc_html( wp_trim_words( get_the_excerpt(), 8, '...' ) ); 
                            ?>
                        </p>

                        <?php if ( get_post_type() === 'product' && function_exists( 'wc_get_product' ) ) :
                            $product = wc_get_product( get_the_ID() ); // Get product object
                            if ( $product ) : ?>
                                <p class="product-price">
                                    <?php echo $product->get_price_html(); // Display product price ?>
                                </p>
                            <?php endif;
                        endif; ?>
                    </div>
                </article>
            <?php endwhile;
            echo '</div>';
            wp_reset_postdata();
        else :
            echo '<h3>No Results Found</h3>';
        endif;

        die();
    }
}


// Add the AJAX fetch JavaScript to the footer
add_action('wp_footer', 'ajax_fetch');

if ( !function_exists('ajax_fetch') ) {
    function ajax_fetch() {
        ?>
            <script type="text/javascript">
                function fetchResults() {
                    var keyword = jQuery('#searchInput').val();
                    if ( keyword == "" ) {
                        jQuery('#datafetch').html("");
                    } else {
                        jQuery.ajax({
                            url: '<?php echo admin_url('admin-ajax.php'); ?>',
                            type: 'post',
                            data: { action: 'data_fetch', keyword: keyword },
                            success: function(data) {
                                jQuery('#datafetch').html(data);
                            }
                        });
                    }
                }
            </script>
        <?php
    }
}
?>
