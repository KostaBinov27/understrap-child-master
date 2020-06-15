<?php
/**
 * Template Name: Plan selection
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-plan.png" alt="section-img" />
    </div>
    <div class="wrapper h-100">
        <div class="banner-section_inner">
            <h1>Choose Your Plan</h1>
        </div>
    </div>
</section>
<section class="choose-plan-section">
    <!-- <form action=""> -->
        <div class="wrapper-small">
            <div class="choose-plan-section_top">
                <h2>How Many Meals Do You Want?</h2>
                <p>Minimum 10 Total</p>
            </div>
            <div class="choose-plan-section_inner">
                <div class="plan-single">
                    <div class="img-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/break.png" alt="">
                    </div>
                    <div class="input-wrapper">
                        <span class="minus-trigger">-</span><div class="sliderce" id="slider-range-break"></div><span class="plus-trigger">+</span>
                    </div>
                </div>
                <div class="plan-single">
                    <div class="img-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/meat.png" alt="">
                    </div>
                    <div class="input-wrapper">
                        <span class="minus-trigger">-</span><div class="sliderce" id="slider-range-meat"></div><span class="plus-trigger">+</span>
                    </div>
                </div>
                <div class="plan-single">
                    <div class="img-wrapper">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vege.png" alt="">
                    </div>
                    <div class="input-wrapper">
                        <span class="minus-trigger">-</span><div class="sliderce" id="slider-range-vege"></div><span class="plus-trigger">+</span>
                    </div>
                </div>
            </div>
            <div class="choose-plan-section_bottom">
                <div class="total-wrapper">
                    <p class="meal-price">Total: <span id="mealsCount">3</span> Meals</p>
                    <p class="meal-price">Total: <span id="mealsPriceTotal">27</span>$</p>
                </div>
                <button class="btn btn-pink" disabled id="choosePlansContinue">Choose your plans</button>
                <button class="btn btn-pink m-auto" disabled id="spinerBtn" style="display:none;"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></button>
            </div>
        </div>
    <!-- </form> -->
    <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/deco-1.png" alt="">
    </div>
    <div class="bg-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/deco-2.png" alt="">
    </div>
</section>


<script>
    jQuery(document).ready(function ($) {
        //  $.get('<?php echo get_site_url(); ?>/?post_type=product&add-to-cart=50,51,52,52,52,52,52', function() {});
    });
</script>
<?php
get_footer();
