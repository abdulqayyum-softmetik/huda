<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Huda
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function huda_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'huda_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function huda_woocommerce_scripts() {
	wp_enqueue_style( 'huda-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), _S_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'huda-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'huda_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function huda_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'huda_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function huda_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'huda_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

// Remove the default actions
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

// Add the custom wrapper around price and rating
add_action('woocommerce_after_shop_loop_item_title', 'price_rating_wrapper', 8);
function price_rating_wrapper() {
    echo '<div class="price-rating-wrapper">';
		woocommerce_template_loop_price();
		woocommerce_template_loop_rating();
    echo '</div>';
}

/**
 * Adding wrapper inside login form.
 */
function huda_woocommerce_login_wrapper_start() {
    echo '<div class="woocommerce-login-wrapper">';
}
add_action( 'woocommerce_before_customer_login_form', 'huda_woocommerce_login_wrapper_start' );

function huda_woocommerce_login_wrapper_end() {
    echo '</div><!-- End of custom login wrapper -->';
}
add_action( 'woocommerce_after_customer_login_form', 'huda_woocommerce_login_wrapper_end' );


/**
 * Remove default WooCommerce Sidebar.
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Move WooCommerce single product tabs into bottom.
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 10 );

// Add custom class to WooCommerce sale flash
function huda_custom_woocommerce_sale_flash($html, $post, $product) {
    // Add your custom classes here
    $custom_class = 'huda-onsale-card';

    // Modify the HTML to include the custom classes
    $html = '<span class="onsale ' . esc_attr($custom_class) . '">' . esc_html__('Sale!', 'huda') . '</span>';

    return $html;
}
add_filter('woocommerce_sale_flash', 'huda_custom_woocommerce_sale_flash', 10, 3);



if ( ! function_exists( 'huda_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function huda_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="huda-site-main container">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'huda_woocommerce_wrapper_before' );

if ( ! function_exists( 'huda_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function huda_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'huda_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( '																																																																																																																											' ) ) {
			huda_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'huda_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function huda_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		huda_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'huda_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'huda_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function huda_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'huda' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'huda' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'huda_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function huda_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php huda_woocommerce_cart_link(); ?>
			</li>
			<li></li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

if ( ! function_exists( 'count_item_in_cart' ) ){
	function count_item_in_cart() {
		$count = 0;
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$count++;
		}
		return $count;
	}
}

if ( ! function_exists( 'huda_woocommerce_product_content_wrap' ) ) {
	/**
	 *
	 * Wrap woocommerce product title, price, add to cart button 
	 * into div
	 *
	 */

	// Remove the wrapping around the product image
	remove_action('woocommerce_before_shop_loop_item_title', 'custom_wrap_start', 5);
	remove_action('woocommerce_after_shop_loop_item', 'custom_wrap_end', 20);

	// Wrap only Title, Price, and Add to Cart in a single div on the Shop Page
	add_action('woocommerce_shop_loop_item_title', 'custom_wrap_start', 5);
	add_action('woocommerce_after_shop_loop_item', 'custom_wrap_end', 30);

	// div start
	function custom_wrap_start() {
		echo '<div class="huda-product-content-wrap">';
	}

	// div close
	function custom_wrap_end() {
		echo '</div>';
	}
}

add_filter('woocommerce_locate_template', function($template, $template_name, $template_path) {
    if ($template_name === 'cart/cart.php') {
        echo '<h1>Custom Template Triggered</h1>';
        return get_template_directory() . '/woocommerce/cart/cart.php';
    }
    return $template;
}, 10, 3);
