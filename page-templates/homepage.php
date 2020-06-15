<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<?php

if (isset($_POST['emailSubmit'])){
  
  $to = 'kostabinovps@gmail.com';
  $subject = 'FitBites New Emal Subscription';
  $body = 'Email Address: '.$_POST['emailAddress'];
  $headers = array('Content-Type: text/html; charset=UTF-8');
  
  $emailSent = wp_mail( $to, $subject, $body, $headers );
}

$flag = -1;
if (isset($_POST['zipLookUp'])){
  $numberToLook = $_POST['zipCodeNum'];
  $shipping_zones = WC_Shipping_Zones::get_zones();
  $codes = '';
  $codesarr = [];
  
  foreach($shipping_zones as $zone){
    foreach ($zone['zone_locations'] as $singleLocation) {
      $codes = $codes.','.$singleLocation->code;
      $codesarr = explode(',', $codes);
    }
  }
  if(in_array($numberToLook, $codesarr)){
    $flag = 1;
  } else {
    $flag = 0;
  }
} ?>

    <section class="hero-section">
      <div class="img-wrapper">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-img.png" alt="hero-img" />
      </div>
      <div class="content-wrapper">
        <h1>Fresh meets flexible</h1>
        <h3>Fresh, delicious meals how you want them, when you want them.</h3>
        <a data-toggle="modal" data-target="#exampleModal" class="btn btn-white">Get started</a>
      </div>
    </section>

    <section class="simple-section">
      <div class="wrapper-small">
        <div class="simple-section_inner">
          <div class="simple-section_inner_left">
            <div class="content-wrapper">
              <h2>
                <span class="text-turq">Healthy</span
                ><span class="dot-normalize">.</span>
                <span class="text-pink">Delicious</span
                ><span class="dot-normalize">.</span>
                <span class="text-yellow">Simple</span
                ><span class="dot-normalize">.</span>
              </h2>
              <p>
                Eating right shouldn’t be complicated. That’s why we offer
                fully-customizable meal plans packed full of the tastiest,
                freshest ingredients. Every meal we put on our menu has to meet
                two criteria. Is it healthy, and is it delicious? Simple. Beyond
                that, the choices are all yours.
              </p>
            </div>
            <div class="img-wrapper">
              <img
                class="d-block d-lg-none img-res"
                 src="<?php echo get_stylesheet_directory_uri(); ?>/img/simple-2.jpg"
                alt="section-img"
              />
              <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/simple-1.jpg" alt="section-img" />
            </div>
          </div>
          <div class="simple-section_inner_right">
            <div class="img-wrapper">
              <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/simple-2.jpg" alt="section-img" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="menu-section section-padding">
      <div class="bg-wrapper">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/section-bg.png" alt="section-bg" />
      </div>
      <div class="wrapper-small">
        <div class="section-heading">
          <h2 class="text-white">What's on the menu</h2>
        </div>
        <div class="menu-section_inner">
          <a class="menu-item" href="#">
            <div class="menu-img-wrapper">
              <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-1.png" alt="meal-img" />
            </div>
          </a>
          <a class="menu-item" href="#">
            <div class="menu-img-wrapper">
              <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-2.png" alt="meal-img" />
            </div>
          </a>
          <a class="menu-item" href="#">
            <div class="menu-img-wrapper">
              <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-3.png" alt="meal-img" />
            </div>
          </a>
        </div>
        <a href="<?php echo get_site_url(); ?>/our-meals/" class="btn">Our meals</a>
      </div>
    </section>

    <section class="customizer-section">
      <div class="wrapper">
        <div class="customizer-section_inner">
          <div class="img-grid">
            <div class="img-grid_inner">
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-1.png" alt="customizer-img" />
                <a href="<?php echo get_site_url(); ?>/our-meals/" class="btn btn-pink btn-img">Choose</a>
              </div>
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-2.png" alt="customizer-img" />
                <a href="<?php echo get_site_url(); ?>/meals-one-time/" class="btn btn-turq btn-img">Customize</a>
              </div>
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-3.png" alt="customizer-img" />
                <a href="<?php echo get_site_url(); ?>/our-meals/" class="btn btn-yellow btn-img">Enjoy</a>
              </div>
            </div>
          </div>
          <div class="content-wrapper">
            <h3 class="text-pink">Meals to fit your lifestyle.</h3>
            <h2><span class="text-crossed">Customer</span> Customizer</h2>
            <p>
              You don’t live your life like everyone else. So, why should you
              eat like them? At Fitbites Meals, we believe in the freedom of
              choice. Tailor a selection of our delicious meals to suit your
              lifestyle. Switch ingredients in or out. Order one-off packages or
              save on subscriptions. Whatever you want. It’s up to you.
            </p>
            <a href="<?php echo get_site_url(); ?>/how-it-works/" class="btn btn-pink">How it works</a>
          </div>
        </div>
      </div>
    </section>

    <section id="zipCodesLookUp" class="delivery-section">
      <div class="wrapper-small">
        <div class="delivery-section_inner">
          <h2 class="text-white">Do we deliver?</h2>
          <p class="text-white">
            We sure do! Delivery is every Sunday. Use our delivery area lookup
            below to see if we are delivering in your area yet.
          </p>
          <div class="zip-form">
            <?php if ($flag == 1){ ?>
              <div class="alert alert-success" role="alert">
                There is delivery for this location!
              </div>
            <?php
            } else if ($flag == 0) { ?>
            <div class="alert alert-danger" role="alert">
              There is no delivery for this location!
            </div>
            <?php
            } ?>
            <form action="#zipCodesLookUp" method="post">
              <input type="number" name="zipCodeNum" placeholder="Enter zip code" />
              <button type="submit" name="zipLookUp" class="btn btn-white-t">Look up</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="get-started-section">
      <div class="wrapper-small">
        <div class="get-started-section_inner">
          <h2>Lucky you</h2>
          <h3>
            We already deliver to your area. So, what are you waiting for?
          </h3>
          <a id="getStartedPopup" data-toggle="modal" data-target="#exampleModal" class="btn btn-pink">Get started</a>
        </div>
      </div>
      <span class="img-deco-left">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/pepper-left.png" alt="decoration-img" />
      </span>
      <span class="img-deco-right">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/pepper-right.png" alt="decoration-img" />
      </span>
    </section>

    <section class="newsletter-section">
      <div class="bg-wrapper">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/newsletter-bg.png" alt="section-bg" />
      </div>
      <div id="emailForm" class="wrapper">
        <div class="newsletter-section_inner">
          <h2>
            Fresh Deals Right to Your Inbox
          </h2>
          <h3 class="text-turq">
            Join our mailing list to stay up to date with our new menu item
          </h3>
          <div class="form-wrapper">
            <?php if ($emailSent){ ?>
              <div class="alert alert-success" role="alert">
                Successfully sent!
              </div>
            <?php
            } else { ?>
              <form method="post" action="#emailForm">
                <input type="email" placeholder="email" name="emailAddress" />
                <button type="submit" name="emailSubmit" class="btn btn-turq">Submit</button>
              </form>
            <?php
            } ?>
            
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();