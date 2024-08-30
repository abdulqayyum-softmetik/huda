<footer class="footer-main">
    <div class="footer-copyright border-top d-flex flex-wrap justify-content-center align-items-center">
        <div class="site-info text-white text-center">
            &copy; <?php echo date('Y'); ?>

            <span class="sep"> | </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( '%1$s by %2$s.', 'huda' ), 'Huda Wordpress Theme', '<a href="https://softmetik.com/wphuda">softmetik</a>' );
                ?>
        </div><!-- .site-info -->
    </div>
</footer>