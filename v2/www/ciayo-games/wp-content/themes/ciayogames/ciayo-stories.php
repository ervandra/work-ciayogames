<?php /* Template Name: Ciayo stories */ ?>
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
 <div class="banner-ciayo-stories">
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
                    <h3 class="text-center fw-600">COMPELLING STORIES UNFOLD</h3>
                    <P>Each book have their own story. Do you want to be an Idol, or a haunted library keeper?</P>
                    <br>
                    <br>
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
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-12 my-4">
                    <img data-aos="zoom-in" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-8/CIAYO-Games-page-8-03.png" class="" alt="image-games">
                </div>
            </div>
        </div>

        <div class="grid-container full">
            <div class="bg-content-4-ciayo-stories column-center ">
                <div class="grid-x ">
                    <div data-aos="fade-right" class="cell small-12 medium-6 large-12 my-4  content-4-ciayo-stories">
                        <h3 class="fw-600">BEAUTIFUL AND IMMERSIVE</h3>
                        <p><b>CIAYO Stories</b> as a platform consist many titles of Visual Novel with each unique trait and interaction feature. Get ready to experience a visual novel like never before.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3 class="fw-600">WHICH STORY ARE YOU ON? </h3>
                        <p>With many IPs that have been or will be adapted to CS,
                           player have the ability to become any imagination they want.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 class="fw-600">FOLLOW US ON</h2>
                        <a href="" class=""><i class="fab fa-facebook"></i></a>
                        <a href="" class=""><i class="fab fa-instagram"></i></a>
                        <a href="" class="">@ciayogames</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="grid-container m-back-games-detail-2 ">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-12 large-12">
                    <a class="button-back-games-detail" href="<?php echo get_permalink(35); ?>">〱 All Games</a>
                </div>
            </div>
        </div>

    </div>

<?php
get_footer();
