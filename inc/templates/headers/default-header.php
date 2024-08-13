<button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive"><i class="fas fa-bars"></i></button>
<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header visually-hidden">
    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body w-100">
    <header id="masthead" class="navbar navbar-expand-md navbar-light huda-primary-header">
        <div class="d-flex align-items-center justify-content-between container-fluid">
            <div class="huda-site-title-wrapper">
                <?php 
                    if(  function_exists('the_custom_logo') && has_custom_logo() ) : 
                        the_custom_logo();
                    else :
                        ?>
                            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                            <p><?php bloginfo( 'description' ); ?></p>
                        <?php
                    endif;
                ?>
            </div><!-- .site-branding -->

            <nav id="huda-site-navigation" class="huda-main-navigation w-100">
                <div class="d-flex align-items-center justify-content-between border rounded-pill position-relative gap-4 me-4 ms-0 pe-3 ps-0" id="main-menu">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                    ?>
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="huda-header-icons-wrapper d-flex align-items-center gap-1">
                                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <?php 
                                    if ( function_exists( 'huda_woocommerce_cart_count' ) ) {
                                        huda_woocommerce_cart_count();
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="huda-header-icons-wrapper">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
  </div>
</div>