<?php /* Template Name: Support */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
  <div id="banner-support">
        <div class="grid-container">
            <div data-aos="zoom-in" class="grid-y grid-margin-y align-center-middle text-center">
                <div class="bg-title-banner">
                    <h2 class="fw-500">SUPPORT</h2>
                    <p>We will help you the best we can</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container full">
        <div class="grid-x">
            <div class="cell small-12 medium-12 large-12 text-center">
                <br>
                <br>
                <br>
                <br>
                <h2 class="fw-700 title-slick-support">FIND SUPPORT FOR YOUR GAME</h2>
            </div>
            <div class="cell small-12 medium-12 large-12">
                <div class="wrap">
                    <div class="slider">

                        <div onclick="location.href='<?php echo get_permalink(76); ?>';" class="item">
                           <a href="<?php echo get_permalink(76); ?>"><img onclick="location.href='<?php echo get_permalink(76); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-02.png" alt="image-support"></a> 
                        </div>
                        <div onclick="location.href='<?php echo get_permalink(74); ?>';" class="item">
                            <a href="<?php echo get_permalink(74); ?>"> <img onclick="location.href='<?php echo get_permalink(74); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-03.png" alt="image-support"></a> 
                        </div>
                        <div onclick="location.href='<?php echo get_permalink(65); ?>';" class="item">
                          <a href="<?php echo get_permalink(65); ?>"> <img onclick="location.href='<?php echo get_permalink(65); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-04.png" alt="image-support"></a> 
                        </div>

                    </div>
                </div>
                <div class="slider-support-mobile">
                    <img onclick="location.href='<?php echo get_permalink(76); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-02.png" alt="image-support">
                    <img onclick="location.href='<?php echo get_permalink(74); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-03.png" alt="image-support">
                    <img onclick="location.href='<?php echo get_permalink(65); ?>';" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-10/CIAYO-Games-page-12-04.png" alt="image-support">
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
