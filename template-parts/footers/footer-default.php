<footer class="footer-main">
    <div class="container">
       <div class="footer-content">
            <?php $logo_url =  huda_light_logo_url(); ?>
            <div class="d-flex align-items-start justify-content-between">
                <div class="w-25">
                    <img src="<?php echo esc_url( $logo_url )  ?>" alt="">
                    <p>Welcome to your ultimate source for fresh perspectives! Discover curated content designed to enlighten, entertain, and engage readers worldwide.</p>
                </div>
                <div>
                    <h4 class="h4">Categories</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="">Travel</a>
                        </li>
                        <li>
                            <a href="">Science</a>
                        </li>
                        <li>
                            <a href="">Lifestyle</a>
                        </li>
                        <li>
                            <a href="">Technology</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="h4">Shop</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="">My Account</a>
                        </li>
                        <li>
                            <a href="">Shop Page</a>
                        </li>
                        <li>
                            <a href="">Cart Page</a>
                        </li>
                        <li>
                            <a href="">Checkout Page</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="h4">Usefull Links</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <a href="">Terms</a>
                        </li>
                        <li>
                            <a href="">Privacy</a>
                        </li>
                        <li>
                            <a href="">Cookies</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="h4">Keep up to date</h4>

                    <?php echo do_shortcode('[contact-form-7 id="945e27e" title="Newsletter"]') ?>
                </div>
            </div>
       </div>
    </div>

    <div class="footer-copyright  align-items-center">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap">
                    &copy; <?php echo date('Y'); ?>
                    
                    <?php esc_html( bloginfo('title') ); ?>
            
                    <span class="sep"> - </span>
            
                    <span class="text-white">All Rights Reserved.</span>
            
                    <?php
                        dynamic_sidebar( 'footer-copyright' );
                    ?>
                </div>
                <div>
                    <ul class="d-flex gap-3">
                        <li>
                            <a href="">
                                <i class="ri-facebook-circle-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-twitter-x-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-youtube-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>