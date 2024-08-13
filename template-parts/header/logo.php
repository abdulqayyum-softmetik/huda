<?php
if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
    the_custom_logo();
} else {
    echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
}
?>
