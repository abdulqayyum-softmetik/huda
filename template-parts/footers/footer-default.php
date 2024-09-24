<?php 
/**
 * Header Default
 *
 */
$container_width = huda_get_footer_container_width();
?>
<footer class="footer-main">
    <div class="<?php echo esc_attr( $container_width ); ?>">
       <div class="footer-content">
            <div class="d-flex flex-wrap align-items-start justify-content-between gap-2">
                <div class="col-lg-3 col-md-3 col-12">
                    <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                </div>
                <div>
                    <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                </div>
                <div class="col-lg-3 col-12">
                    <?php dynamic_sidebar( 'footer-widget-5' ); ?>
                </div>
            </div>
       </div>
    </div>

    <div class="footer-copyright">
        <div class="<?php echo esc_attr( $container_width ); ?>">
            <div class="d-flex flex-wrap justify-content-between">
                <p class="d-flex flex-wrap mb-0">
                    &copy; <?php echo date('Y'); ?>
                    
                    <?php esc_html( bloginfo('title') ); ?>
            
                    <span class="sep"> - </span>
            
                    <span class="text-sm"> All Rights Reserved.</span>
            
                    <?php
                        dynamic_sidebar( 'footer-copyright' );
                    ?>
                </p>
                <div>
                    <?php huda_social_links(); ?>
                </div>
            </div>
        </div>
    </div>
</footer>