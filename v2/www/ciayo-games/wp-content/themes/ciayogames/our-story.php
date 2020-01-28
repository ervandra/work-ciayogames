<?php /* Template Name: Our Story */ ?>
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
<div id="banner-our-story">

<div class="grid-x grid-margin-x content-banner-ourstory">
    <div data-aos="zoom-in" class="cell auto text-center">
        <h2 class="fw-500">CORE BELIEFS</h2>
        <h4>Ghummy . Tinkering . Quirky </h4>
        <div class="button-group  large ">
            <a class="button button-orange-1 text-black p-rl-2 mr-0 br-0" href="#content-our-story">See more</a>
            <a class=" button button-orange-2 button-scroll-right  text-black bl-0" href="#content-our-story">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </div>
</div>
</div>

<div id="content-our-story">

<div class="grid-container">
    <div class="grid-x grid-margin-x align-center">
        <div class="cell small-12 medium-10 large-10">
            <h3 class="title-news">CIAYO GAMES TEAM</h3>
            <p class="text-news">In the summer of 2010, Ciayo Games was born. Back then, the founders had no idea what the company would become. They just knew they wanted to make great games that people would play for years. To do so, they would create a new kind of gaming company.</p>
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
            <br>
            <h3 class="title-news">TIMELINE</h3>
            <br>
            <p class="text-news">In the summer of 2010, Ciayo Games was born. Back then, the founders had no idea what the company would become. They just knew they wanted to make great games that people would play for years. To do so, they would create a new kind of gaming company.
</p>
            <br>
        </div>
    </div>
</div>

<div class="grid-container">
    <div class="grid-x grid-padding-x">

        <div class="cell small-12 medium-1 large-1 start-line">
            <h5 class="time-timeline">2016</h5>
            <h6 class="time-detail-timeline">Start line</h6>
        </div>
        <div class="cell small-12 medium-11 large-11 timeline-bl">
            <h5 class="title-timeline">The best teams make the best games</h5>
            <p>We used this simple sentence to describe our idea of a new kind of games company that would put people front and center.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-3/CIAYO-Games-page-3-02.jpg" />
            <br>
            <br>
            <br>
        </div>

        <div class="cell small-12 medium-1 large-1 start-line">
            <h5 class="time-timeline">2016</h5>
            <h6 class="time-detail-timeline">Start line</h6>
        </div>
        <div class="cell small-12 medium-11 large-11 timeline-bl">
            <h5 class="title-timeline">The best teams make the best games</h5>
            <p>We used this simple sentence to describe our idea of a new kind of games company that would put people front and center. We thought to ourselves: “What if you put together a games compa- ny the way you’d put together a professional sports team?”In that type of model, the sole mission of the would stand in their way. Everything else, including financial goals, would be secondary.</p>
        </div>

    </div>
</div>
</div>

<?php
get_footer();
