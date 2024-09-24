<a class="" data-bs-toggle="offcanvas" href="#offcanvasSidebar" role="button" aria-controls="offcanvasSidebar">
  <i class="ri-menu-2-line"></i>
</a>

<div class="offcanvas main offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasSidebarLabel">
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
    </h5>
    <div type="button" class="btn-close m-0" data-bs-dismiss="offcanvas" aria-label="Close"></div>
    
  </div>
  <div class="offcanvas-body">
      <div class="">
          <?php
              wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="%1$s" class="d-flex flex-column justify-content-start me-0 pe-0 gap-3 %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
              ));
          ?>
      </div>

      

  </div>
  <div class="offcanvas-footer">
    <div class="d-flex align-items-center justify-content-between">
        <?php huda_social_links(); ?>

      <p class="d-flex flex-wrap mb-0">
            &copy; <?php echo date('Y'); ?>
            
            <?php esc_html( bloginfo('title') ); ?>
    
            <span class="sep"> - </span>
    
            <span> All Rights Reserved.</span>
    
            <?php
                dynamic_sidebar( 'footer-copyright' );
            ?>
        </p>
    </div>
  </div>
</div>