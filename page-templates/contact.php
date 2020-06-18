<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); 
if (isset($_POST['emailSubmit'])){
  
    $to = 'kostabinovps@gmail.com';
    $subject = 'FitBites New Emal Subscription';
    $body = 'Name: '.$_POST['nameContact'].'<br> Emal: '.$_POST['emailContact'].'<br> Message: <br>'.$_POST['contactFormText'];
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    $emailSent = wp_mail( $to, $subject, $body, $headers );
  } ?>

<section class="banner-section banner-hero">
      <div class="banner-bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-contact.png" alt="section-img" />
      </div>
      <div class="wrapper h-100">
        <div class="banner-section_inner">
          <h1>Contact us</h1>
          <h4>We are happy to help!</h4>
        </div>
      </div>
  </section>
  <section id="emailForm" class="get-in-touch-section">
    <div class="wrapper-small">
        <div class="get-in-touch-section_inner">
            <h2 class="text-uppercase">Get in touch</h2>
            <h3 class="text-uppercase meal-title">Need help with your order? questions? compliments?</h3>
            <p>We love to hear from our customers. Feel free to send us a message below and we’ll do our best to get back to you within 48 hours.</p>
            <div class="form-wrapper">
                <?php if ($emailSent){ ?>
                    <div class="alert alert-success" role="alert">
                    Successfully sent!
                    </div>
                <?php
                } else { ?>
                    <form method="post" action="#emailForm">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="nameContact">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="email" name="emailContact">
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" name="contactFormText" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="emailSubmit" class="btn btn-turq">Submit</button>
                        </div>
                    </form>
                <?php 
                } ?>
            </div>
        </div>
    </div>
    <div class="bg-left-bottom">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-yellow.png" alt="bg-img">
    </div>
    <div class="bg-left-top">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-side-1.png" alt="bg-img">
    </div>
    <div class="bg-right">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-pink.png" alt="bg-img">
    </div>
  </section>
  <section id="mapsSection" class="locations-section">
      <div class="wrapper">
          <h2 class="h1 text-black">Visit us</h2>
          <h3 class="text-turq text-uppercase meal-title">Our locations</h3>
          <div class="locations-section_inner">
            <div class="locations-section_inner_left">
                <p><span class="text-uppercase">CYPRESS</span> - 5895 Katella Ave, CA</p>
                <div class="map-wrapper">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=5895%20Katella%20Ave%2C%20CA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/en/">google maps embed options</a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
                </div>
                <a href="tel:(714) 699-1348" class="btn btn-pink">Cypress</a>
            </div>
            <div class="locations-section_inner_right">
                <p><span class="text-bold text-uppercase">FOUNTAIN VALLEY</span> - 9965 Ellis Ave, CA</p>
                <div class="map-wrapper">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=9965%20Ellis%20Ave%2C%20CA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/en/">google maps embed options</a></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
                </div>
                <a href="tel:(714) 887-3441" class="btn btn-pink">Fountain Valley</a>
            </div>
          </div>
      </div>
      <div class="bg-left">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-pink-2.png" alt="bg-img">
    </div>
    <div class="bg-right">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-side-2.png" alt="bg-img">
    </div>
  </section>

<?php
get_footer();
