<?php 
/**
 * Header Default
 *
 */ 
$container_width = huda_get_footer_container_width();
?>
<footer class="footer-main">
    <div class="<?php echo esc_attr( $container_width ); ?>">
        <?php if ( is_active_sidebar( 'footer-widget-1' ) || is_active_sidebar( 'footer-widget-2' || is_active_sidebar( 'footer-widget-3' ) || is_active_sidebar( 'footer-widget-4' || is_active_sidebar( 'footer-widget-5' ) ) ) ) : ?>
            <div class="footer-content">
                <div class="d-flex align-items-start flex-wrap justify-content-between">
                    <div class="col-lg-3 col-md-6 col-12">
                        <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="d-flex flex-wrap align-items-start justify-content-lg-between justify-content-md-between justify-content-start gap-0">
                            <div class="col-lg-3 col-md-3 col-6">
                                <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                            </div>
                            <div class="col-lg-3 col-md-3 col-6">
                                <?php dynamic_sidebar( 'footer-widget-5' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <?php endif; ?>
        <div class="footer-copyright">
            <div class="d-flex w-100 flex-wrap justify-content-between">
                <div class="d-flex flex-wrap mb-0">
                    &copy; <?php echo date('Y'); ?>
                    
                    <?php esc_html( bloginfo('title') ); ?>
            
                    <div class="sep"> - </div>
            
                    <div> All Rights Reserved.</div>
            
                    <?php
                        dynamic_sidebar( 'footer-copyright' );
                    ?>
                </div>
                <div>
                    <?php huda_social_links(); ?>
                </div>
            </div>
        </div>
    </div>

	<?php wp_footer(); ?>

</footer>