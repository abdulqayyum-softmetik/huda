<footer class="footer-main">
    <div class="footer-copyright border-top d-flex flex-wrap justify-content-center align-items-center">
        <div class="site-info text-white text-center">
            &copy; <?php echo date('Y'); ?>

            <span class="sep"> | </span>
                
            <?php esc_html( bloginfo('title') ); ?>

            <?php
                dynamic_sidebar( 'footer-copyright' );
            ?>
        </div><!-- .site-info -->
    </div>
</footer>