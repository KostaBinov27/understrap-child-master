<?php
/**
 * Template Name: How It Works
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

    <section class="banner-section">
      <div class="banner-bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/how-hero.png" alt="section-img" />
      </div>
      <div class="wrapper h-100">
        <div class="banner-section_inner">
          <h1>How it works</h1>
          <h4>Only what you want, how you want it.</h4>
        </div>
      </div>
    </section>

    <section class="flex-section">
      <div class="wrapper-small">
        <div class="flex-section_inner">
          <div class="flex-section_inner_top">
            <div class="content-wrapper">
              <h2>We Like to Flex</h2>
              <h4 class="text-black">
                At Fitbites Meals, we know that no meal plan is right for
                everyone. That’s why we’ve built our entire business around
                flexibility. Just choose the meals you want, customize them (or
                not), and let us know how often to deliver. It’s that simple.
              </h4>
            </div>
            <div class="img-wrapper">
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/beef-top.png" alt="meal-selection" />
              </a>
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chicken-top.png" alt="meal-selection" />
              </a>
            </div>
          </div>
          <div class="flex-section_inner_bottom">
            <div class="img-wrapper">
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/turkey-top.png" alt="meal-selection" />
              </a>
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fish-top.png" alt="meal-selection" />
              </a>
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vege-top.png" alt="meal-selection" />
              </a>
            </div>
            <div class="img-wrapper-res">
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/beef-top.png" alt="meal-selection" />
              </a>
              <a class="img-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chicken-top.png" alt="meal-selection" />
              </a>
              <a class="img-link no-laptop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/turkey-top.png" alt="meal-selection" />
              </a>
              <a class="img-link no-laptop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fish-top.png" alt="meal-selection" />
              </a>
              <a href="#" class="img-link no-laptop">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vege-top.png" alt="meal-selection" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-bg.png" alt="section-bg" />
      </div>
    </section>

    <section class="what-section">
      <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/section-2.png" alt="section-bg" />
      </div>
      <div class="wrapper">
        <div class="what-section_inner">
          <div class="box-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/when.png" alt="icon" />
            <h2>When</h2>
            <h4>
              Start off by telling us when you want your food and how much to
              make. Is this a weekly thing, or do you just want a one-off order
              to try us out?
            </h4>
          </div>
          <div class="box-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/what.png" alt="icon" />
            <h2>What</h2>
            <h4>
            Then let us know which meals you love. If it’s a one-off order, choose what you want exactly. For subscriptions, let us know your favorites and we’ll mix it up for you!
            </h4>
          </div>
          <div class="box-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/how.png" alt="icon" />
            <h2>How</h2>
            <h4>
            Finally, let us know how you want it. Dietary restrictions? Bulking up and need extra protein? No problem! Customize our meals to your heart’s content.
            </h4>
          </div>
        </div>
      </div>
    </section>

    <section class="time-to-eat-section">
      <div class="wrapper-small">
        <div class="time-to-eat-section_inner">
          <div class="time-to-eat-section_inner_left">
            <h2>Time to Eat!</h2>
            <h4 class="text-black">
              Once you’ve created your custom plan, it’s time to eat! We deliver
              every Sunday. Use our delivery lookup below to see if we are
              delivering in your area yet.
            </h4>
            <div class="form-wrapper">
              <form action="#zipCodesLookUp" method="post">
                <div class="form-group">
                  <input name="zipCodeNum" type="text" placeholder="ZIP CODE" />
                  <button type="submit" name="zipLookUp" class="btn btn-pink">Look up</button>
                </div>
              </form>
            </div>
          </div>
          <div class="time-to-eat-section_inner_right">
            <div class="img-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meals-circle.png" alt="section-img" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="zipCodesLookUp"></section>
    <?php if ($flag == 0 || $flag == 1){  ?>
      <section  class="get-started-section">
        <div class="wrapper-small pt-5 pb-5">
          <div class="get-started-section_inner">
            <?php if ($flag == 1) {  ?>
              <h2 style="color: #111;">Lucky you</h2>
              <h3 style="color: #111;">
                We already deliver to your area. So, what are you waiting for?
              </h3>
            <?php } if ($flag == 0){ ?>
              <h2 style="color: #111;">Sorry</h2>
              <h3 style="color: #111;">
                We don’t offer delivery in your area (yet). But you can still swing by one of our locations and pick up your meals.
              </h3>
            <?php } ?>
            <a id="getStartedPopup" data-toggle="modal" data-target="#exampleModal" class="btn btn-pink">Get started</a>
          </div>
        </div>
        <span class="img-deco-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pepper-left.png" alt="decoration-img" />
        </span>
        <span class="img-deco-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pepper-right.png" alt="decoration-img" />
        </span>
      </section>
    <?php } ?>
    <section class="email-section">
      <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/newsl-img.png" alt="section-bg" />
      </div>
      <div class="wrapper-small">
        <div class="email-section_inner">
          <h2 class="text-white">Newsletter Signup</h2>
          <h4>
            Stay up to date with our latest products and locations
          </h4>
          <div class="form-wrapper">
            <?php if ($emailSent){ ?>
              <div class="alert alert-success" role="alert">
                Successfully sent!
              </div>
            <?php
            } else { ?>
              <form method="post" action="#emailForm">
                <div class="form-group">
                  <input type="email" name="emailAddress" placeholder="your email address" />
                  <button name="emailSubmit" type="submit" class="btn btn-turq">subscribe</button>
                </div>
              </form>
            <?php
            }
            ?>
            
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
