<?php
function huda_theme_check_for_updates( $transient ) {
    if ( empty( $transient->checked ) ) {
        return $transient;
    }

    $theme_slug = 'huda';
    $theme = wp_get_theme( $theme_slug );
    $current_version = $theme->get( 'Version' );

    // URL to the theme-update.json file
    $remote_version_file = 'https://softmetik.com/updates/theme-update.json';

    $remote_version_info = wp_remote_get( $remote_version_file );

    if ( ! is_wp_error( $remote_version_info ) && wp_remote_retrieve_response_code( $remote_version_info ) === 200 ) {
        $remote_version_data = json_decode( wp_remote_retrieve_body( $remote_version_info ), true );

        if ( version_compare( $current_version, $remote_version_data['new_version'], '<' ) ) {
            $theme_data = array(
                'theme'       => $theme_slug,
                'new_version' => $remote_version_data['new_version'],
                'url'         => $remote_version_data['details_url'],
                'package'     => $remote_version_data['package'],
            );

            $transient->response[ $theme_slug ] = $theme_data;
        }
    }

    return $transient;
}
add_filter( 'site_transient_update_themes', 'huda_theme_check_for_updates' );

