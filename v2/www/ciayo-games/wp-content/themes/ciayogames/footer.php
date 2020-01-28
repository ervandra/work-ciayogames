<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Ciayo_Games
 * @since 1.0
 * @version 1.2
 */

?>

<?php wp_footer(); ?>
<footer>
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-padding-y">
                <div class="cell small-12 medium-6 large-6">
                    <div class="footer-left-top">
                        <label>FOLLOW US ON</label>
                        <a href="https://www.facebook.com/ciayogames/" class="text-white"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/ciayogames/?hl=en" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white">@ciayogames</a>
                    </div>
                </div>
                <div class="cell small-12 medium-6 large-6">
                    <div class="footer-right-top">
                      <a href="https://play.google.com/store/apps/details?id=com.ciayo.chipsmonstertap&hl=en">  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing_btn_google.png" width="100px" /> </a>
                       <a href="https://apps.apple.com/id/app/chips-monster-tap/id1199367972?l=id"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing_btn_ios.png" width="100px" class="img-download" /></a>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ciayogames-logo@2x.png" width="100px" />
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-6 large-6">
                    <div class="footer-left-bottom">
                        <a href="#" class="text-white">Media Kit</a>
                        <a href="#" class="text-white">Terms of Use</a>
                        <a href="#" class="text-white">Privacy Policy</a>
                        <br>
                        <br>
                        <p>Brand Guideline</p>
                        <p>Product guideline</p>
                    </div>
                </div>
                <div class="cell small-12 medium-6 large-6">
                    <div class="footer-right-bottom">
                        <a class="text-right text-white">The Dragon Building</a>
                        <p class="text-right">Mangga Dua Square, E8, Jl. Mangga Dua Raya</p>
                        <p class="text-right">RT.11/RW.6, Ancol, Jakarta, DKI Jakarta, Daerah Khusus Ibukota Jakarta 14420</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
