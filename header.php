<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/moolay/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="logo" />
        </a>
        <div class="button-wrapper">
          <a class="nav-link d-none d-sm-inline-block d-lg-none" href="#">Our meals</a>
          <a
            class="nav-link btn btn-white d-none d-sm-inline d-lg-none btn-nav-res"
            id="getStartedPopup" data-toggle="modal" data-target="#exampleModal"
            >Get started</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active d-none">
              <a class="nav-link" href="<?php echo get_site_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/our-meals/">Our meals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/how-it-works/">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://fitbitesgrill.com" target="_blank">Fitbites grill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/contact/">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-white" id="getStartedPopup" data-toggle="modal" data-target="#exampleModal">Get started</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_site_url(); ?>/my-account/">My account</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary d-none">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

  <!-- Modal -->
  <div class="modal home-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-custom" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="d-none modal-title text-center" id="exampleModalLabel">Choose Your Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-5">
            <h3>Choose Your Plan</h3>
          </div>
          <div class="button-wrapper">
            <a href="<?php echo get_site_url(); ?>/plan-selection/"><button type="button" class="btn btn-secondary-custom">WEEKLY</button></a>
            <a href="<?php echo get_site_url(); ?>/meals-one-time/"><button type="button" class="btn btn-secondary-custom">ONE TIME</button></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>