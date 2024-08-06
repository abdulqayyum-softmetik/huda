<?php

/**
 *  Enable svg mime type support
 */
if(!function_exists('huda_svg_support')){
	function huda_svg_support($mimes){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'huda_svg_support');
}


// Ensure this is within PHP tags
if (!function_exists('get_svg_icons')) {
    function get_svg_icons() {
        $json_path = get_template_directory() . '/assets/svg/icons.json';
        
        // Check if the file exists
        if (!file_exists($json_path)) {
            error_log('Icons JSON file not found: ' . $json_path);
            return [];
        }

        // Get the contents of the file
        $json = file_get_contents($json_path);
        if ($json === false) {
            error_log('Error reading Icons JSON file: ' . $json_path);
            return [];
        }

        // Decode the JSON
        $icons = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            error_log('Error decoding JSON: ' . json_last_error_msg());
            return [];
        }

        return $icons;
    }
}

if (!function_exists('display_svg_icon')) {
    function display_svg_icon($menu_icon) {
        $icons = get_svg_icons();
        if (array_key_exists($menu_icon, $icons)) {
            echo $icons[$menu_icon];
        } else {
            echo 'Icon not found: ' . $menu_icon;
        }
    }
}