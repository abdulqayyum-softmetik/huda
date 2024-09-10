<?php 
	// Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {
		// Sidebar layout variable
		$logo_light = get_theme_mod('logo_secondary_setting_url', ''); 
    }
?>

<header class="header-main <?php echo is_home() ? 'home' : 'header-pages'; ?>">
    <nav>
        <div class="container-fluid">
          
            <div class="position-relative gap-4" id="main-menu">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="d-flex align-items-center gap-2">
                            <?php get_template_part( 'template-parts/components/offcanvas', 'main' ); ?>

                            <?php get_template_part( 'template-parts/components/offcanvas', 'search' ); ?>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-8">
                        <div class="d-flex align-items-center justify-content-center">
                            <?php 
                                if( function_exists('the_custom_logo') && has_custom_logo() && is_home() ) : 
                                    the_custom_logo();
                                else :
                                    if($logo_light):
                                        ?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <img class="logo-secondary" src="<?php echo esc_url( $logo_light ); ?>" alt="">
                                            </a>
                                        <?php
                                    else:
                                        ?>
                                            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                                            <p><?php bloginfo( 'description' ); ?></p>
                                        <?php
                                    endif;
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="d-flex align-items-center justify-content-end gap-3">
                            <div>
                                <div class="huda-header-icons-wrapper d-flex align-items-center gap-1">
                                    <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php 
                                        if ( function_exists( 'huda_woocommerce_header_cart' ) ) {
                                            huda_woocommerce_header_cart();
                                        }
                                    ?>
                                </div>
                            </div> 
                            
                            <div class="toggle-switch d-xl-block d-lg-block d-md-block d-none">
                                <input type="checkbox" name="" id="switch">
                                <label for="switch">
                                    <div class="toggle-wrapper">
                                        <div class="toggle" data-theme-toggle></div>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center pt-3 d-xl-block d-lg-block d-md-block d-none">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="d-flex flex-wrap align-items-center justify-content-center me-0 pe-0 gap-5 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
            ?>
        </div>

    </nav>
</header>