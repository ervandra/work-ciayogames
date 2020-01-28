<?php /* Template Name: Heroes uprising */ ?>
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
<div class="banner-heroes-uprising">
    </div>
    <div id="content-games-detail">
        <div class="grid-container m-back-games-detail">
            <div class="grid-x grid-margin-x">
                <div class="cell auto ">
                    <a class="button-back-games-detail" href="<?php echo get_permalink(35); ?>">〱 All Games</a>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div data-aos="zoom-in" class="cell small-12 medium-12 large-12 ">
                    <h3 class="text-center fw-600">THE ALIENS ARE INVADING!</h3>
                    <P>Not long after the horrifying war against the monsters, Chammyland once again bathed in flames. It is your responsibility to help Chips and all citizens to defend their home. Build your tower, install your trap, and destroy the aliens!</P>
                    <br>
                    <br>
                </div>
                <div class="cell small-12 medium-4 large-5 my-3">
                    <img data-aos="fade-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-6/CIAYO-Games-page-6-02.png" alt="image-games" class="">
                </div>
                <div class="cell small-12 medium-8 large-7 my-3 column-center">
                    <h3 class="fw-700">DEFENSE TOWER RPG CLICKER GAME</h3>
                    <p><b>CHIPS: Heroes Uprising</b> is a game with a post apocalyptic themed battle between the citizens who acted as heroes fighting againts aliens who are about to colonize their city. Players can also raid other players online to gather loots and become the number 1 survivor in the world.</p>
                    <div class="row-games">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing_btn_google.png" width="100px" alt="image-games-download" class="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing_btn_ios.png" width="100px" alt="image-games-download" class="">
                    </div>
                </div>

            </div>
        </div>

        <div class="grid-container full">
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-6/CIAYO-Games-page-6-03.jpg" width="100%" class="" alt="image-games">
                </div>
                <div class="cell small-12 medium-12 large-12">
                    <div  class="bg-complex">
                        <div  data-aos="zoom-in" class="text-center">
                        <h4 class="fw-700">COMPLEX AND INTENSE</h4>
                        <p>
                            <b>CHIPS:Heroes Uprising</b> combines Tower Defense and Idle Clicker as the game's core mechanic. Player uses Heroes, Traps, and other elements to create strategies and make decisions. Sometimes, defeating the aliens can be easy. But other times, it can be a nightmare.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-12  large-12  ">
                    <div class="bg-sequel">
                        <div class="content-sequel column-center">
                            <h4 class="fw-700">A DIRECT SEQUEL TO CHIPS: MONSTER TAP</h4>
                            <P>After the success of CHIPS: Monster Tap, we expand the story of Chips and his friends by adding more lore and plot with darker tone.</P>
                            <br>
                            <a class="btn-sequel">See CHIP: Monster Tap »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="cell small-12 medium-10 large-10 my-6">
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

        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-padding-y text-center">
                <div class="cell small-12 medium-12 large-12 column-center-1">
                    <h4 class="fw-700">ALSO ADAPTED INTO A CARD GAME</h4>
                    <br>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-6/CIAYO-Games-page-8-04.jpg" class="" width="700px" alt="image-ciayo-games">
                </div>
                <div class="cell small-12 medium-12 large-12 row-center">
                    <a href="#" class="btn-chu-card-games fw-500">See CHU Card Game »</a>
                </div>
            </div>
        </div>

        <div class="grid-container m-back-games-detail">
            <div class="grid-x grid-margin-x">
                <div class="cell auto">
                    <a class="button-back-games-detail" href="<?php echo get_permalink(35); ?>">〱 All Games</a>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
