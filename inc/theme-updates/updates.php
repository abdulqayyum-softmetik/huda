<?php
/**
 * Check for theme updates from Hostinger.
 */
if ( ! function_exists( 'huda_theme_check_for_updates' ) ) :
    function huda_theme_check_for_updates( $transient ) {
        if ( empty( $transient->checked ) ) {
            return $transient;
        }

        // Use the theme's slug to identify it
        $theme_slug = wp_get_theme()->get_stylesheet();
        $current_version = wp_get_theme()->get( 'Version' );

        // URL where your JSON file is located
        $remote_version_file = '    ';

        // Fetch the update information
        $remote_version_info = wp_remote_get( $remote_version_file );

        if ( is_wp_error( $remote_version_info ) ) {
            error_log( 'Theme update check failed: ' . $remote_version_info->get_error_message() );
            return $transient;
        }

        $response_code = wp_remote_retrieve_response_code( $remote_version_info );
        if ( $response_code !== 200 ) {
            error_log( 'Theme update check failed: Received response code ' . $response_code );
            return $transient;
        }

        $remote_version_data = json_decode( wp_remote_retrieve_body( $remote_version_info ), true );
        if ( isset( $remote_version_data['new_version'] ) && version_compare( $current_version, $remote_version_data['new_version'], '<' ) ) {
            $theme_data = array(
                'theme'       => $theme_slug,
                'new_version' => $remote_version_data['new_version'],
                'url'         => $remote_version_data['details_url'],
                'package'     => $remote_version_data['package'],
            );

            // Add the update information to the transient
            $transient->response[ $theme_slug ] = $theme_data;
        } else {
            error_log( 'No new version available or version comparison failed.' );
        }

        return $transient;
    }
    add_filter( 'site_transient_update_themes', 'huda_theme_check_for_updates' );
endif;
