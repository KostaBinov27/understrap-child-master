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

get_header(); ?>

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
        <div class="meals-section_bottom">
          <div class="tab-content" id="nav-tabContent">
            <div
              class="tab-pane fade show active"
              id="nav-breakfast"
              role="tabpanel"
              aria-labelledby="nav-breakfast-tab"
            >
              <div class="meals-grid">
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-11.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-yellow">Customize</a>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="nav-lunch"
              role="tabpanel"
              aria-labelledby="nav-lunch-tab"
            >
              <div class="filter-buttons">
                <button class="btn btn-filter">Beef</button>
                <button class="btn btn-filter">Chicken</button>
                <button class="btn btn-filter">Turkey</button>
                <button class="btn btn-filter">Fish</button>
                <button class="btn btn-filter">Vegeterian</button>
              </div>
              <div class="meals-grid">
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="meal-item">
                  <div class="img-wrapper">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meal-22.png" alt="meal-img" />
                  </div>
                  <div class="content-wrapper">
                    <a href="#"
                      ><h3 class="meal-title">
                        Teryiaki Chicken With Brown Rice
                      </h3></a
                    >
                    <p class="meal-desc">
                      Contrary to popular belief, Lorem Ipsum is not simply
                      random text. It has roots in a piece of classical Latin
                      literature from 45 BC.<span class="meal-price"
                        >$9.95</span
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
                          <input class="switch right" type="checkbox" />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-yellow">Customize</a>
              </div>
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
            <form action="">
              <div class="form-group">
                <input type="email" placeholder="your email address" />
                <button class="btn btn-turq">subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
