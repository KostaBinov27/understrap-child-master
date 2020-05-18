<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="container-fluid" id="wrapper-footer">

	
    <footer>
      <div class="wrapper">
        <div class="footer-inner d-none d-lg-flex">
          <a href="#" class="footer-logo-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="logo" />
          </a>
          <div class="footer-group">
            <p class="text-turq ul-heading">Locations:</p>
            <ul class="footer-ul">
              <li>
                <span class="text-bold">Cypress</span> - 5895 Katella Ave, CA
              </li>
              <li>
                <span class="text-bold">Fountain valley</span> - 9965 Ellis Ave,
                CA
              </li>
            </ul>
            <p class="text-turq ul-heading">Working hours:</p>
            <ul class="footer-ul">
              <li>
                <span class="text-bold">Mon-fri:</span> 10:30 AM - 09:00 PM
              </li>
              <li><span class="text-bold">Sat:</span> 11:00 AM - 09:00 PM</li>
              <li><span class="text-bold">Sat:</span> 11:00 AM - 08:00 PM</li>
            </ul>
          </div>
          <div class="footer-group">
            <p class="text-turq ul-heading">Sitemap:</p>
            <ul class="footer-ul uppercase">
              <li><a href="#">Plans</a></li>
              <li><a href="#">Our meals</a></li>
              <li><a href="#">How it works</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Fitbites grill</a></li>
            </ul>
          </div>
          <div class="footer-group">
            <a href="#" class="btn btn-pink">Call cypress</a>
            <a href="#" class="btn btn-pink">Call fountain valley</a>
          </div>
          <div class="footer-group">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.svg" alt="fb-icon" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.svg" alt="instagram-icon" /></a>
          </div>
        </div>
        <a href="#" class="footer-logo-wrapper mobile-logo d-block d-lg-none">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="logo" />
        </a>
        <div class="footer-inner-mobile d-lg-none">
          <div class="footer-group">
            <p class="text-turq ul-heading">Locations:</p>
            <ul class="footer-ul">
              <li>
                <span class="text-bold">Cypress</span> - 5895 Katella Ave, CA
              </li>
              <li>
                <span class="text-bold">Fountain valley</span> - 9965 Ellis Ave,
                CA
              </li>
            </ul>
          </div>
          <div class="footer-group">
            <p class="text-turq ul-heading">Working hours:</p>
            <ul class="footer-ul">
              <li>
                <span class="text-bold">Mon-fri:</span> 10:30 AM - 09:00 PM
              </li>
              <li><span class="text-bold">Sat:</span> 11:00 AM - 09:00 PM</li>
              <li><span class="text-bold">Sat:</span> 11:00 AM - 08:00 PM</li>
            </ul>
          </div>
          <div class="footer-group">
            <p class="text-turq ul-heading">Sitemap:</p>
            <ul class="footer-ul uppercase">
              <li><a href="#">Plans</a></li>
              <li><a href="#">Our meals</a></li>
              <li><a href="#">How it works</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Fitbites grill</a></li>
            </ul>
          </div>
          <div class="footer-group">
            <a href="#" class="btn btn-pink">Call cypress</a>
            <a href="#" class="btn btn-pink">Call fountain valley</a>
          </div>
          <div class="footer-group d-none">
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.svg" alt="fb-icon" /></a>
            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/insta.svg" alt="instagram-icon" /></a>
          </div>
        </div>
      </div>
    </footer>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>