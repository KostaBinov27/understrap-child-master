<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="banner-section">
	<div class="banner-bg">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/acc-bg.png" alt="section-img" />
	</div>
	<div class="wrapper h-100">
	<div class="banner-section_inner">
		<h1>My Account</h1>
	</div>
	</div>
</section>

<?php

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation" role="navigation">
	<div class="list-group">
			<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"
				   class="list-group-item list-group-item-action"><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
	</div>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
