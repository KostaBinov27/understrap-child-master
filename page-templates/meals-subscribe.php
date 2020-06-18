<?php
/**
 * Template Name: Meals Subscribe 
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
} ?>

<section class="banner-section">
      <div class="banner-bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-meals.png" alt="section-img" />
      </div>
      <div class="wrapper h-100">
        <div class="banner-section_inner">
          <h1>Our meals</h1>
          <h4>Delicious curated dishes to get you started.</h4>
        </div>
      </div>
  </section>
    <section class="meals-section">
      <div class="wrapper-small">
        <div class="meals-section_top">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a
                class="nav-item nav-link active"
                id="nav-breakfast-tab"
                data-toggle="tab"
                href="#nav-breakfast"
                role="tab"
                aria-controls="nav-breakfast"
                aria-selected="true"
                >Breakfast</a
              >
              <a
                class="nav-item nav-link"
                id="nav-lunch-tab"
                data-toggle="tab"
                href="#nav-lunch"
                role="tab"
                aria-controls="nav-lunch"
                aria-selected="false"
                >Lunch & dinner</a
              >
            </div>
          </nav>
        </div>
        <div class="meals-section_bottom" id="subscribeTimeWrap">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-breakfast" role="tabpanel" aria-labelledby="nav-breakfast-tab">
              <div class="meals-grid">
              <?php
              $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'breakfast' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="<?php echo get_permalink(); ?>"><h3 class="meal-title"> <?php the_title(); ?> </h3></a>
                    <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"></span>
                    </p>
                    <ul class="alergens">
                      <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                      <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                    </ul>
                    <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-lunch"
              role="tabpanel"
              aria-labelledby="nav-lunch-tab"
            >
              <div class="filter-buttons" id="secondFilterButtons-Onetime">
                <button class="btn btn-filter active" id="beef" aria-to-show="beefWrap">Beef</button>
                <button class="btn btn-filter" id="chicken" aria-to-show="chickenWrap">Chicken</button>
                <button class="btn btn-filter" id="turkey" aria-to-show="turkeyWrap">Turkey</button>
                <button class="btn btn-filter" id="fish" aria-to-show="fishWrap">Fish</button>
                <button class="btn btn-filter" id="vege" aria-to-show="vegeWrap">Vegeterian</button>
              </div>

              <div id="beefWrap">
                <div class="meals-grid">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'beef' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="meal-item">
                    <div class="img-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                    </div>
                    <div class="content-wrapper">
                      <a href="<?php echo get_permalink(); ?>"
                        ><h3 class="meal-title">
                          <?php the_title(); ?>
                        </h3></a
                      >
                      <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"
                          ></span
                        >
                      </p>
                      <ul class="alergens">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                      </ul>
                      <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </div>
              </div>
              <div id="chickenWrap" style="display: none;">
                <div class="meals-grid">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'chicken' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="meal-item">
                    <div class="img-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                    </div>
                    <div class="content-wrapper">
                      <a href="<?php echo get_permalink(); ?>"
                        ><h3 class="meal-title">
                          <?php the_title(); ?>
                        </h3></a
                      >
                      <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"
                          ></span
                        >
                      </p>
                      <ul class="alergens">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                      </ul>
                      <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </div>
              </div>
              <div id="turkeyWrap" style="display: none;">
                <div class="meals-grid">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'turkey' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="meal-item">
                    <div class="img-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                    </div>
                    <div class="content-wrapper">
                      <a href="<?php echo get_permalink(); ?>"
                        ><h3 class="meal-title">
                          <?php the_title(); ?>
                        </h3></a
                      >
                      <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"
                          ></span
                        >
                      </p>
                      <ul class="alergens">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                      </ul>
                      <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </div>
              </div>
              <div id="fishWrap" style="display: none;">
                <div class="meals-grid">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'fish' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="meal-item">
                    <div class="img-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                    </div>
                    <div class="content-wrapper">
                      <a href="<?php echo get_permalink(); ?>"
                        ><h3 class="meal-title">
                          <?php the_title(); ?>
                        </h3></a
                      >
                      <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"
                          ></span
                        >
                      </p>
                      <ul class="alergens">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                      </ul>
                      <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </div>
              </div>
              <div id="vegeWrap" style="display: none;">
                <div class="meals-grid">
                <?php
                $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'meatless' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="meal-item">
                    <div class="img-wrapper">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="meal-img" />
                    </div>
                    <div class="content-wrapper">
                      <a href="<?php echo get_permalink(); ?>"
                        ><h3 class="meal-title">
                          <?php the_title(); ?>
                        </h3></a
                      >
                      <p class="meal-desc">
                      <?php the_excerpt(); ?><span class="meal-price"
                          ></span
                        >
                      </p>
                      <ul class="alergens">
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                      </ul>
                      <div class="form-wrapper">
                          <form action="">
                            <div class="form-group sub">
                                <span>Subscribe</span>
                                <input class="switch right" type="checkbox" product-id="<?php echo the_ID(); ?>"/>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-wrapper text-center">
            <button class="btn btn-yellow-spin m-auto btn-yellow" id="spinerBtn" style="display:none;"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></button>
            <a id="continueToCustomizeSubscription" class="btn btn-yellow">GO TO CART</a>
            <div id="errorMessageSubscribe" class="alert alert-danger mt-5" role="alert" style="display: none;">
              Please add products to card!
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="subs-section">
      <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sub-img.png" alt="" />
      </div>
      <div class="wrapper">
        <div class="subs-section_inner">
          <h2 class="text-black">Got Substitutions? No Problem!</h2>
          <h4 class="text-black">
            Mix, match, and customize any of our meals to suit you. Change
            ingredients. Add extras. Whatever you want. If you don’t see the
            option, leave us a note and we’ll do what we can to accomodate you.
          </h4>
          <a href="#" class="btn btn-pink">GET STARTED</a>
        </div>
      </div>
    </section>

    <section class="email-section">
      <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/newsletter-img.png" alt="section-bg" />
      </div>
      <div class="wrapper-small">
        <div class="email-section_inner">
          <h2 class="text-black">Newsletter Signup</h2>
          <h4 class="text-black">
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
                  <button class="btn btn-turq" name="emailSubmit">subscribe</button>
                </div>
              </form>
            <?php 
            } ?>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
