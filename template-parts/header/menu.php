<?php
if ( has_nav_menu( 'primary' ) ) {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => 'nav',
        'container_class' => 'main-navigation',
        'menu_class'     => 'menu',
    ) );
} else {
    echo '<nav class="main-navigation"><ul><li><a href="#">' . __( 'No menu assigned!', 'huda' ) . '</a></li></ul></nav>';
}
?>
