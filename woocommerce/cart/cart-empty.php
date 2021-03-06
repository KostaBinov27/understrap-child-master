<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.1
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
?>
<section class="banner-section">
	<div class="banner-bg">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cart-hero.png" alt="section-img" />
	</div>
	<div class="wrapper h-100">
	<div class="banner-section_inner">
		<h1>Cart</h1>
	</div>
	</div>
</section>
<div class="container mt-5 cart-empty-pre">
<?php

do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<p class="return-to-shop">
		<a class="btn btn-outline-primary" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php esc_html_e( 'Return to shop', 'understrap' ); ?>
		</a>
	</p>
<?php endif; ?>

</div>
