<footer id="colophon" class="site-footer-default">
    <div class="row pb-3">
        <div class="col-lg-6 col-md-4 col-12">
            <div class="col-lg-6">
                <?php dynamic_sidebar( 'footer-widget-1' ); ?>
            </div>
        </div>
        <div class="col-lg-6 col-md-8 col-12">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <?php dynamic_sidebar( 'footer-widget-5' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <div class="site-info text-end">
            &copy; <?php echo date('Y'); ?>

            <span class="sep"> | </span>
                <?php
                    dynamic_sidebar( 'footer-copyright' );
                ?>
        </div><!-- .site-info -->
        <div class="footer-social-widget">
            <?php dynamic_sidebar( 'footer-widget-7' ); ?>
        </div>
    </div>
</footer><!-- #colophon -->