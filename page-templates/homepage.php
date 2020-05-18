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

    <section class="hero-section">
      <div class="img-wrapper">
        <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-img.png" alt="hero-img" />
      </div>
      <div class="content-wrapper">
        <h1>Fresh meets flexible</h1>
        <h3>Fresh, delicious meals how you want them, when you want them.</h3>
        <a href="javascript:void(0)" class="btn btn-white">Get started</a>
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
        <a href="#" class="btn">Our meals</a>
      </div>
    </section>

    <section class="customizer-section">
      <div class="wrapper">
        <div class="customizer-section_inner">
          <div class="img-grid">
            <div class="img-grid_inner">
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-1.png" alt="customizer-img" />
                <a href="#" class="btn btn-pink btn-img">Choose</a>
              </div>
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-2.png" alt="customizer-img" />
                <a href="#" class="btn btn-turq btn-img">Customize</a>
              </div>
              <div class="img-wrapper">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/customizer-3.png" alt="customizer-img" />
                <a href="#" class="btn btn-yellow btn-img">Enjoy</a>
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
            <a href="#" class="btn btn-pink">How it works</a>
          </div>
        </div>
      </div>
    </section>

    <section class="delivery-section">
      <div class="wrapper-small">
        <div class="delivery-section_inner">
          <h2 class="text-white">Do we deliver?</h2>
          <p class="text-white">
            We sure do! Delivery is every Sunday. Use our delivery area lookup
            below to see if we are delivering in your area yet.
          </p>
          <div class="zip-form">
            <form action="">
              <input type="number" placeholder="Enter zip code" />
              <button type="submit" class="btn btn-white-t">Look up</button>
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
          <a href="#" class="btn btn-pink">Get started</a>
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
      <div class="wrapper">
        <div class="newsletter-section_inner">
          <h2>
            Fresh Deals Right to Your Inbox
          </h2>
          <h3 class="text-turq">
            Join our mailing list to stay up to date with our new menu item
          </h3>
          <div class="form-wrapper">
            <input type="email" placeholder="email" />
            <button type="submit" class="btn btn-turq">Submit</button>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
