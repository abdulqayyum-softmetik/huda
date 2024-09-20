<header class="header-main">
    <nav>
        <div class="container-fluid">
            <div class="position-relative gap-4" id="main-menu">
                <div class="row justify-content-between">
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="d-flex align-items-center gap-3">
                            <?php get_template_part( 'template-parts/components/offcanvas', 'main' ); ?>
                            <?php 
                                if( function_exists('the_custom_logo') && has_custom_logo() ) : 
                                    the_custom_logo();

                                    else:
                                        ?>
                                            <div class="site-title">
                                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                                            </div>
                                            <p><?php bloginfo( 'description' ); ?></p>
                                        <?php
                                endif;
                            ?>
                            <div class="d-flex align-items-center justify-content-center d-xl-block d-lg-block d-md-block d-none">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'container' => false,
                                        'menu_class' => '',
                                        'fallback_cb' => '__return_false',
                                        'items_wrap' => '<ul id="%1$s" class="d-flex flex-wrap align-items-center justify-content-center me-0 pe-0 gap-3 %2$s">%3$s</ul>',
                                        'depth' => 2,
                                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4">
                        <div class="d-flex align-items-center justify-content-end gap-3">
                            <div>
                                <?php get_template_part( 'template-parts/components/offcanvas', 'search' ); ?>
                            </div>
                            
                            <div>
                                <div class="huda-header-icons-wrapper d-flex align-items-center gap-1">
                                    <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                        <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                                            <i class="ri-account-circle-line"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div>
                                <div class="huda-header-icons-wrapper position-relative d-flex align-items-center gap-1">
                                    <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
                                            <i class="ri-shopping-bag-4-line"></i>
                                        </a>
                                        <span class="woo-cart-count position-absolute top-0 translate-middle rounded-circle">
                                            <?php echo esc_attr( count_item_in_cart() ); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="d-xl-block d-lg-block d-md-block d-none">
                                <a href="" class="buy-button">Buy Huda</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>