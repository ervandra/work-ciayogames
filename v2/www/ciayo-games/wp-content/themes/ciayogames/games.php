<?php /* Template Name: Games */ ?>
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
<div id="banner-games">
        <div class="grid-container">
            <div data-aos="zoom-in" class="grid-y grid-margin-y align-center-middle text-center">
                <h2 class="fw-500 banner-title-games">ALL THE GAMES WE MADE</h2>
                <p>Here is where you begin your adventure</p>
               
                <div class="button-group  large my-2">
                    <a class="button button-orange-1 text-black p-rl-2 mr-0 br-0" href="#content-1-games">See more</a>
                    <a class=" button button-orange-2 button-scroll-right  text-black bl-0" href="#content-1-games">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="content-1-games">
        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell large-12">
                    <div class="games-bg-1">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">

                            </div>
                            <div data-aos="fade-left" class="cell small-10 medium-6 large-4 content-games-1">
                                <p class="text-black">The immense battle between Chammyland's Citizen and Monsters. Adaptation of popular IP, CHIPS & Co.</p>
                              
                                <a href="<?php echo get_permalink(61); ?>" class="button-seemore">See more</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell large-12">
                    <div class="games-bg-2">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">

                            </div>
                            <div data-aos="fade-left" class="cell small-10 medium-6 large-4 content-games-2">
                                <p class="text-black">Direct sequel to CMT. The invasion of Aliens.</p>
                               
                                <a href="<?php echo get_permalink(56); ?>" class="button-seemore">See more</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell large-12">
                    <div class="games-bg-3">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">

                            </div>
                            <div data-aos="fade-left"
                             class="cell small-10 medium-6 large-4 content-games-3">
                                <p class="text-black">A VN platform where you can choose your own story.</p>
                             
                                <a href="<?php echo get_permalink(58); ?>" class="button-seemore">See more</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell large-12 ">
                    <div class="games-bg-4">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">

                            </div>
                            <div data-aos="fade-left"
                             class="cell small-10 medium-6 large-4 content-games-4">
                                <p class="text-black">Challenge another Alien war in CHIPS: HEROES UPRISING CARD GAME.</p>
                                
                                <a href="<?php echo get_permalink(56); ?>" class="button-seemore">See more</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
