<?php 
/**
 * Header Default
 *
 */
$container_width = huda_get_header_container_width(); 
$sticky_header = huda_header_sticky_setting();
$button_url = huda_header_button_url();
?>
<header class="header-main <?php echo esc_attr($sticky_header == "on" ? 'sticky' : 'relative'); ?>">
    <nav>
        <div class="<?php echo esc_attr( $container_width ); ?>">
            <div class="position-relative gap-4" id="main-menu">
                <div class="row justify-content-between">
                    <div class="col-lg-9 col-md-8 col-6 px-0">
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
                            <div class="w-100 d-xl-block d-lg-block d-md-none d-none">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'container' => false,
                                        'menu_class' => '',
                                        'fallback_cb' => '__return_false',
                                        'items_wrap' => '<ul id="%1$s" class="d-flex flex-wrap align-items-center justify-content-start me-0 pe-0 gap-lg-3 gap-md-2 gap-3 %2$s">%3$s</ul>',
                                        'depth' => 2,
                                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-4 px-0">
                        <div class="d-flex align-items-center justify-content-end gap-3"> 
                            <?php 
                                if ( is_singular() ) :
                                    ?>
                                        <div>
                                            <?php get_template_part( 'template-parts/components/offcanvas', 'search' ); ?>
                                        </div>
                                    <?php
                                endif;
                            ?>
                            
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
                                <a href="<?php echo esc_url( $button_url ); ?>" target="_blank" rel="no-follow" class="buy-button">Buy Huda</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>