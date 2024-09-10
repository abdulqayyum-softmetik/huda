<?php

function huda_register_block_styles() {

    // Paragraph block custom styles
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'fancy-paragraph',
            'label' => __( 'Fancy Paragraph', 'huda' ),
            'inline_style' => '.wp-block-paragraph.is-style-fancy-paragraph { font-style: italic; font-weight: bold; color: #ff6600; }',
        )
    );

    // Heading block custom styles
    register_block_style(
        'core/heading',
        array(
            'name'  => 'highlight-heading',
            'label' => __( 'Highlight Heading', 'huda' ),
            'inline_style' => '.wp-block-heading.is-style-highlight-heading { background-color: #ffeb3b; color: #000; }',
        )
    );

    // Image block custom styles
    register_block_style(
        'core/image',
        array(
            'name'  => 'rounded-image',
            'label' => __( 'Rounded Image', 'huda' ),
            'inline_style' => '.wp-block-image.is-style-rounded-image img { border-radius: 50%; }',
        )
    );

    // Quote block custom styles
    register_block_style(
        'core/quote',
        array(
            'name'  => 'fancy-quote',
            'label' => __( 'Fancy Quote', 'huda' ),
            'inline_style' => '.wp-block-quote.is-style-fancy-quote { border-left: 5px solid #ff6600; font-style: italic; color: #555; }',
        )
    );

    // Button block custom styles
    register_block_style(
        'core/button',
        array(
            'name'  => 'outline-button',
            'label' => __( 'Outline Button', 'huda' ),
            'inline_style' => '.wp-block-button.is-style-outline-button .wp-block-button__link { border: 2px solid #ff6600; background: transparent; color: #ff6600; }',
        )
    );

    // List block custom styles
    register_block_style(
        'core/list',
        array(
            'name'  => 'checklist',
            'label' => __( 'Checklist', 'huda' ),
            'inline_style' => '.wp-block-list.is-style-checklist li::before { content: "\2713"; color: #ff6600; margin-right: 10px; }',
        )
    );

}
add_action( 'init', 'huda_register_block_styles' );

function huda_header_style() {
    $header_text_color = get_header_textcolor();

    // If no custom options for text are set, let's bail.
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
        return;
    }

    // Custom header text styles.
    ?>
    <style type="text/css">
    <?php
    // If the text has been hidden by the user, hide it.
    if ( ! display_header_text() ) :
        ?>
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px); /* Hide text */
        }
    <?php
    // Otherwise, apply the custom text color.
    else :
        ?>
        .site-title a,
        .site-description {
            color: #<?php echo esc_attr( $header_text_color ); ?>;
        }
    <?php endif; ?>
    </style>
    <?php
}

function huda_custom_blocks_header() {
    $args = array(
        'default-text-color'     => '000000', // Default text color (black)
        'header-text'            => true, // Enable header text (site title and description)
        'wp-head-callback'       => 'huda_header_style', // Callback function to style the header text
    );

    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'huda_custom_blocks_header' );

