<?php
/**
 * Template Name: Meal Customization
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<section class="banner-section">
      <div class="banner-bg">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-customization.png" alt="section-img" />
      </div>
      <div class="wrapper h-100">
        <div class="banner-section_inner">
          <h1>Time to Customize</h1>
          <h4>
            Special diet? Food allergies? No problem! Mix and match to get the
            perfect meal plan for you.
          </h4>
        </div>
      </div>
    </section>
    <section class="meal-customization">
      <div class="wrapper-small">
        <div class="meal-customization_inner">
          <div class="meals-grid">
          <?php
            global $woocommerce;
            $items = $woocommerce->cart->get_cart();
            foreach($items as $item => $values) { ?>
              <div class="meal-item">
                <div class="img-wrapper">
                  <?php
                  $_product =  wc_get_product( $values['data']->get_id() );
                  // print_r($_product);
                  //product image
                  $getProductDetail = wc_get_product( $values['product_id'] );
                  echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr ) ?>
                </div>
                <div class="content-wrapper">
                  <a href="#"> <h3 class="meal-title"> <?php  echo $_product->get_title(); $values['quantity'];  ?></h3></a>
                  <p class="meal-desc">
                    <?php
                    $price = get_post_meta($values['product_id'] , '_price', true); ?>
                    <?php echo $_product->short_description; ?><span class="meal-price"><?php echo $price; ?></span>
                  </p>
                  <ul class="alergens">
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-1.png" alt="alergen-icon" /></li>
                    <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al-2.png" alt="alergen-icon" /></li>
                  </ul>
                </div>
                <div class="btn-wrapper">
                  <a
                    href="#"
                    class="btn btn-pink"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                    >Customize</a
                  >
                </div>
              </div>
              <?php
            } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="bg-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/veg-bg.png" alt="bg-image" />
          </div>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="customization-inner">
              <form action="">
                <div class="customization-inner_left">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-3.png" alt="meal-img" />
                  </div>
                </div>
                <div class="customization-inner_right">
                  <div class="customization-buttons">
                    <h3 class="modal-title">
                      Bell Peppers Omlette
                    </h3>
                    <div class="button-cat">
                      <h3 class="button-cat_title text-pink">
                        Protiein
                      </h3>
                      <div class="button-cat-grid" data-toggle="buttons">
                        <label class="btn btn-pill btn-default active">
                          <input type="radio" name="options" checked="" />
                          <div>Beef</div>
                        </label>
                        <label class="btn btn-pill btn-default">
                          <input type="radio" name="options" />
                          <div>Chicken</div>
                        </label>
                        <label class="btn btn-pill btn-default">
                          <input type="radio" name="options" />
                          <div>Turkey</div>
                        </label>
                        <label class="btn btn-pill btn-default">
                          <input type="radio" name="options" />
                          <div>Fish</div>
                        </label>
                      </div>
                    </div>
                    <div class="button-cat">
                      <h3 class="button-cat_title text-turq">
                        Veg
                      </h3>
                      <div class="button-cat-grid" data-toggle="buttons">
                        <label
                          class="btn btn-pill pill-turq btn-default active"
                        >
                          <input type="radio" name="options" checked="" />
                          <div>Tomato</div>
                        </label>
                        <label class="btn btn-pill pill-turq btn-default">
                          <input type="radio" name="options" />
                          <div>Pepper</div>
                        </label>
                        <label class="btn btn-pill pill-turq btn-default">
                          <input type="radio" name="options" />
                          <div>Avocado</div>
                        </label>
                        <label class="btn btn-pill pill-turq btn-default">
                          <input type="radio" name="options" />
                          <div>Salad</div>
                        </label>
                      </div>
                    </div>
                    <div class="button-wrapper">
                      <a href="javascript:void(0)" class="btn btn-pink"
                        >Extra Protein $2.99</a
                      >
                    </div>
                  </div>
                </div>
                <div class="customization-inner_bottom">
                  <h3 class="modal-title">
                    notes
                  </h3>
                  <textarea name="" id="" cols="30" rows="10"></textarea>
                  <div class="button-wrapper">
                    <button type="submit" class="btn btn-yellow">
                      Customize
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
get_footer();

    