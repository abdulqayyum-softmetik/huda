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