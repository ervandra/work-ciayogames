<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Ciayo_Games
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <div id="banner-homepage">
        <div class="grid-container">
            <div data-aos="zoom-in" class="grid-y grid-margin-y align-center-middle text-center">
                <h2 class="fw-500 text-black">CIAYO GAMES</h2>
                <h4 class="mb-0">Gregarius . Quirky </h4>
                <h4>Tinkering . Storytelling</h4>
                <div class="button-group  large ">
                    <a class="button button-orange-1 text-black p-rl-2 mr-0 br-0" href="#content-1-homepage">See more</a>
                    <a class=" button button-orange-2 button-scroll-right  text-black bl-0" href="#content-1-homepage">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
	</div>

    <div id="content-1-homepage">
        <div class="grid-container">
            <div class="grid-y align-center">
                <div class="cell small-12 medium-12 large-12 p-tablet">
                    <div data-aos="zoom-in" data-aos-duration="1200" class="news-bg-1">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">
                            </div>
                            <div class="cell small-12 medium-6 large-4 pr-4">
                                <div class="news-title">NEWS</div>
                                <div class="info-news mobile-info-news-1">
                                    <h6>CHIPS: Heroes Uprising telah hadir ! </h6>
                                    <p>Enim laboriosam odio beatae, nesciunt consectetur hic sed expedita accusantium at ducimus ipsa dicta impedit suscipit omnis optio? In sit reiciendis sequi.</p>

                                    <a href="<?php echo get_permalink(46); ?>" class="button-seemore">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-12 large-12 p-tablet">
                    <div data-aos="zoom-in" data-aos-duration="1200" class="news-bg-2">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">
                            </div>
                            <div class="cell small-12 medium-6 large-4 pr-4">
                                <div class="news-title">NEWS</div>
                                <div class="info-news mobile-info-news-2">
                                    <h6>CHIPS: Heroes Uprising telah hadir !</h6>
                                    <p>Enim laboriosam odio beatae, nesciunt consectetur hic sed expedita accusantium at ducimus ipsa dicta impedit suscipit omnis optio? In sit reiciendis sequi.</p>

                                    <a href="<?php echo get_permalink(48); ?>" class="button-seemore">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-12 large-12 p-tablet">
                    <div data-aos="zoom-in" data-aos-duration="1200" class="news-bg-3">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">
                            </div>
                            <div class="cell small-12 medium-6 large-4 pr-4">
                                <div class="news-title">NEWS</div>
                                <div class="info-news mobile-info-news-3">
                                    <h6>CHIPS: Heroes Uprising telah hadir !</h6>
                                    <p>Enim laboriosam odio beatae, nesciunt consectetur hic sed expedita accusantium at ducimus ipsa dicta impedit suscipit omnis optio? In sit reiciendis sequi.</p>
                                    <a href="<?php echo get_permalink(50); ?>" class="button-seemore">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell small-12 medium-12 large-12 p-tablet">
                    <div data-aos="zoom-in" data-aos-duration="1200" class="news-bg-4">
                        <div class="grid-x">
                            <div class="cell small-12 medium-8 large-8">
                            </div>
                            <div class="cell small-12 medium-6 large-4 pr-4">
                                <div class="news-title">NEWS</div>
                                <div class="info-news mobile-info-news-4">
                                    <h6>CHIPS: Heroes Uprising telah hadir !</h6>
                                    <p>Enim laboriosam odio beatae, nesciunt consectetur hic sed expedita accusantium at ducimus ipsa dicta impedit suscipit omnis optio? In sit reiciendis sequi.</p>

                                    <a href="<?php echo get_permalink(52); ?>" class="button-seemore">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content-2-homepage">
        <div class="grid-container w-1200">
            <div class="grid-x grid-margin-x align-middle">
                <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="cell small-12 medium-6 large-4">
                    <h2> EXPLORE OUR GAMES</h2>
                    <p>Choose your own story on CIAYO Stories, a Visual Novel Platform.</p>
                    <a href="<?php echo get_permalink(35); ?>" class="button large button-see-games">See GAMES</a>
                </div>
            </div>
        </div>
    </div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
