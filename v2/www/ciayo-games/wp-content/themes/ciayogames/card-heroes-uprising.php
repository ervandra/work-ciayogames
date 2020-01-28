<?php /* Template Name: Card heroes uprising */ ?>
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
<div class="banner-card-heroes-uprising">
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
                    <h3 class="text-center fw-600">WE MUST SURVIVE THE ALIEN INVASION!</h3>
                    <P>Don't be frightened! You still can defend yourself from the Aliens by gathering resources from your surrounding or from other Heroes.</P>
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

        <div class="grid-container full">
            <div class="bg-fun">
                <div class="grid-x grid-padding-x">
                    <div data-aos="zoom-in" class="column-center bottom-fun text-center text-white">
                        <h3 class="title-achievements">FUN AND COMPETITIVE</h3>
                        <p><b>CHIPS: Heroes Uprising Card Game</b>  can be played by 2-4 players or 5-6 players by using two boxes. Although it is a player vs player game, be aware that the Aliens can still invade your tower! Player uses Heroes, Traps, and other elements to create strategies and make decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-container full">
            <div class="bg-adaptation ">
                <div class="grid-x">
                    <div class="right-adaptation text-white">
                        <h3 class="title-achievements">A CARD GAME ADAPTATION FROM THE MOBILE GAME</h3>
                        <p>We translated the mobile game's core mechanic into a card game. Even though the elements of both games are identical, player will have a whole different experience by playing each game.</p>
                        <a href="" class="right-adaptation-link">See CHIP: Heroes Uprising</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-container m-back-games-detail">
            <div class="grid-x grid-margin-x">
                <div class="cell auto my-6">
                    <a class="button-back-games-detail" href="<?php echo get_permalink(35); ?>">〱 All Games</a>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
