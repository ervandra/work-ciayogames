<?php /* Template Name: news 3 */ ?>
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
 * @subpackage Ciayo_Games
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="banner-news">
    </div>
    <div id="content-news">
        <div class="grid-container m-back-news">
            <div class="grid-x grid-margin-x">
                <div class="cell auto">
                    <a class="button-back-news" href="<?php echo get_permalink(11); ?>">〱 Home</a>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="cell small-12 medium-10 large-10">
                    <h5 class="date-news">NEWS - JUN 28TH 2019</h5>
                    <h3 class="title-news text-left">THE MONSTER ARE INVANDING</h3>
                    <br>
                    <p class="text-news">Help Chips and all Chammyland's citizen protect their beloved home. Colllect all the parts and build your own costumized robot. Enhance your arsenal to extend your firepower, then shoot all the Monsters! The destiny of Chammyland is in your hand.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Games_banner.jpg" class="img-content-news" alt="image" />
                    <p>Help Chips and all Chammyland's citizen protect their beloved home. Colllect all the parts and build your own costumized robot. Enhance your arsenal to extend your firepower, then shoot all the Monsters! The destiny of Chammyland is in your hand.</p>
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                        <div class="orbit-wrapper">
                            <div class="orbit-controls">
                                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-angle-left"></i></button>
                                <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-angle-right"></i></button>
                            </div>
                            <ul class="orbit-container">
                                <li class="is-active orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/GAME_CHU_banner.jpg" alt="Space">
                                        <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/GAME_CHU_banner.jpg" alt="Space">
                                        <figcaption class="orbit-caption">Lets Rocket!</figcaption>
                                    </figure>
                                </li>
                                <li class="orbit-slide">
                                    <figure class="orbit-figure">
                                        <img class="orbit-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/GAME_CHU_banner.jpg" alt="Space">
                                        <figcaption class="orbit-caption">Encapsulating</figcaption>
                                    </figure>
                                </li>

                            </ul>
                        </div>
                        <nav class="orbit-bullets">
                            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                            <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
