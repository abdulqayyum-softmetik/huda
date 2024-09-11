<?php

// The AJAX function
add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');

// Check if function already exists to avoid redeclaration error
if ( !function_exists('data_fetch') ) {
    function data_fetch() {
        $the_query = new WP_Query(array(
            'posts_per_page' => 5,
            's' => esc_attr( $_POST['keyword'] ),
            'post_type' => 'post'
        ));

        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php huda_post_thumbnail('medium'); ?>

                <div class="d-flex flex-column">
                    <a href="<?php echo esc_url( get_permalink() ); ?>"> 
                        <?php the_title(); ?> 
                    </a>

                    <?php
                        huda_posted_on();
                    ?>
                </div>

            <?php endwhile;
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
