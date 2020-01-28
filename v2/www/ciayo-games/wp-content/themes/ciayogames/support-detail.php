<?php /* Template Name: Support detail */ ?>
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

<div id="banner-support">
        <div class="grid-container">
            <div class="grid-y grid-margin-y align-center-middle text-center">
                <div class="bg-title-banner">
                    <h2 class="fw-500">SUPPORT</h2>
                    <p>We will help you the best we can</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-select">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-12 large-12">
                    <div class="content-select">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/page-11/CIAYO-Games-page-12-06.png" width="100px">
                        <label>
                            <select onchange="location = this.value;">
                            <option value="">Select</option>
                            <option value="<?php echo get_permalink(76); ?>">CHIPS: Monster Tap!</option>
                                <option value="<?php echo get_permalink(65); ?>">CHIPS: Heroes Uprising</option>
                                <option value="<?php echo get_permalink(74); ?>">Ciayo Stories</option>
                            </select>
                        </label>
                        <div class="search">
                            <input type="search" class="search-top-bar" placeholder="Cari Pertanyaan?">
                            <button type="button" class="button icon-search-support"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12 medium-12 large-12 my-1">
                <div class="tabs-support">
                    <ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
                        <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">IOS</a></li>
                        <li class="tabs-title"><a href="#panel2c">ANDROID</a></li>
                        <li class="tabs-title"><a href="#panel3c">PC</a></li>
                        <li class="tabs-title"><a href="#panel4c">ALL</a></li>
                    </ul>

                    <div class="tabs-content" data-tabs-content="collapsing-tabs">
                        <div class="tabs-panel is-active" id="panel1c">
                            <div class="grid-x grid-margin-x grid-padding-x">
                                <div class="cell small-12 medium-12 large-12">
                                    <nav aria-label="You are here:" role="navigation">
                                        <ul class="breadcrumbs">
                                          <li><a class="first-breadcrumbs" href="#">Dukungan</a></li>
                                          <li><a href="#">Tetap aman dan bersih</a></li>
                                        </ul>
                                      </nav>
                                </div>

                                <div class="cell small-12 medium-12 large-12">
                                   <h4 class="fw-600">Tetap Aman dan Main Bersih</h4 >
                                    <p><b>Aturan No. 1:</b> Main Clash dengan Rasa Hormat!
                                        Kita semua ada di sini untuk menikmati game bersama-sama. Terkadang itu bisa berarti berdebat dengan teman karena kalah dalam pertempuran atau lomba. Itu normal, tetapi kasar terhadap orang lain membuat game tidak asyik lagi.
                                    </p>
                                    <p>
                                        Saat terlibat dalam segala komunikasi di dalam game, kami mohon para pemain untuk menghormati orang lain. Hal ini juga berlaku dalam bahasa yang digunakan dalam nama dan deskripsi tim (Band, Klan, Gugus Tugas atau Lingkungan).
                                    </p>
                                    <p>Berikut adalah beberapa hal yang kami anggap tidak pantas: <br>
                                    Ujaran kebencian, rasisme, dan bahasa diskriminatif lainnya<br>
                                    Gurauan cabul atau eksplisit secara seksual<br>
                                    Ancaman atau pelecehan<br>
                                    Umpatan berlebihan<br>
                                    Penindasan/perundungan<br>
                                    Jika menjumpai pemain lain menyiksa Anda atau orang lain, beri tahu kami menggunakan tombol laporkan di dalam obrolan. Laporan ditinjau oleh moderator terlatih kami yang akan mengambil tindakan yang sesuai.</p>
                                    <p><b>Konsekuensi kelakuan buruk:</b> Perilaku menyiksa dapat berakibat penutupan akun game sementara dan bahkan permanen. Membuat laporan palsu juga berakibat sama.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell small-12 medium-12 large-12 ">
                <div class="select-language">
                    <label>Bahasa :
                        <select>
                            <option value="indonesia">indonesia</option>
                            <option value="english">english</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                        </select>
                    </label>
                </div>

            </div>
        </div>
    </div>

<?php
get_footer();
