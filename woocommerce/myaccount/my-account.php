<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>
<section class="banner-section">
	<div class="banner-bg">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-acc.png" alt="section-img" />
	</div>
	<div class="wrapper h-100">
	<div class="banner-section_inner">
		<h1>My Account</h1>
	</div>
	</div>
</section>
<div class="container mt-5">
<?php
do_action( 'woocommerce_account_navigation' ); ?>



<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
</div>
