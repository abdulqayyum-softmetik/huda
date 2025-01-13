<?php
// Function to get the RTL mode setting
function huda_is_rtl_enabled() {
    $rtl_mode_switch = get_theme_mod( 'huda_rtl_switch_setting', 'off' );
    return $rtl_mode_switch === 'on' || $rtl_mode_switch === true;
}
