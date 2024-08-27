<div class="container-fluid d-lg-none pt-3 px-2">
    <div class="moile-nav d-flex align-items-center justify-content-between">
        <?php 
            get_template_part( 'inc/custom', 'logo' );  
        ?>
        <div class="d-flex align-items-center border rounded-pill">
            <div class="d-flex align-items-center gap-2 px-3">
                <a class="text-black" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <?php 
                    if ( function_exists( 'huda_woocommerce_cart_count' ) ) {
                        huda_woocommerce_cart_count();
                    }
                ?>
            </div>
            <div class="border-start-0 border-end rounded-pill py-2 px-3">
                <i class="fas fa-search"></i>
            </div>
            <div class="border-start-0 border-end rounded-pill py-2 px-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                <i class="fas fa-bars"></i>
            </div>
        </div>
   </div>
</div>

<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
  <div class="offcanvas-header visually-hidden">
    <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body w-100">
    <header id="masthead" class="w-100 navbar navbar-expand-md justify-content-between navbar-light huda-primary-header">
        <div class="nav-wrapper d-xl-flex align-items-center justify-content-between container-fluid">
            <div class="huda-site-title-wrapper">
                <?php 
                    get_template_part( 'inc/custom', 'logo' );  
                ?>
            </div><!-- .site-branding -->

            <nav id="huda-site-navigation" class="huda-main-navigation w-100">
                <div class="d-flex align-items-center justify-content-between border-xl rounded-pill position-relative gap-4" id="main-menu">
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
                    <div class="d-lg-block d-none">
                        <div class="d-flex align-items-center gap-3">
                           
                            <div class="huda-header-icons-wrapper">
                                <i class="fas fa-search"></i>
                            </div>
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
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-subscribe rounded-pill text-white d-flex gap-2"> Subscribe <i class="fas fa-paper-plane"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->
  </div>
</div>