<?php

function huda_register_block_patterns_and_category() {

    // Register Block Pattern Category
    register_block_pattern_category(
        'huda-patterns',
        array( 'label' => __( 'Huda Patterns', 'huda' ) )
    );

    // Register Hero Section block pattern
    register_block_pattern(
        'huda/hero-section',
        array(
            'title'       => __( 'Hero Section', 'huda' ),
            'description' => _x( 'A simple hero section with a heading, text, and button.', 'Block pattern description', 'huda' ),
            'categories'  => array( 'huda-patterns' ),
            'content'     => '<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background"><!-- wp:heading {"textAlign":"center"} -->
                                <h2 class="has-text-align-center">Welcome to Huda Theme</h2>
                                <!-- /wp:heading -->
                                
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">Build stunning websites with ease.</p>
                                <!-- /wp:paragraph -->
                                
                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                <div class="wp-block-buttons"><!-- wp:button -->
                                <div class="wp-block-button"><a class="wp-block-button__link">Get Started</a></div>
                                <!-- /wp:button --></div>
                                <!-- /wp:buttons --></div>
                                <!-- /wp:group -->',
        )
    );

    // Register Two-Column Layout block pattern
    register_block_pattern(
        'huda/two-column-layout',
        array(
            'title'       => __( 'Two Column Layout', 'huda' ),
            'description' => _x( 'A simple two-column layout with images and text.', 'Block pattern description', 'huda' ),
            'categories'  => array( 'huda-patterns' ),
            'content'     => '<!-- wp:columns -->
                                <div class="wp-block-columns"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:image -->
                                <figure class="wp-block-image"><img src="https://via.placeholder.com/500" alt=""/></figure>
                                <!-- /wp:image --></div>
                                
                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:paragraph -->
                                <p>Insert your content here. You can use this layout for text and image combinations.</p>
                                <!-- /wp:paragraph --></div>
                                <!-- /wp:column --></div>
                                <!-- /wp:columns -->',
        )
    );
}
add_action( 'init', 'huda_register_block_patterns_and_category' );
