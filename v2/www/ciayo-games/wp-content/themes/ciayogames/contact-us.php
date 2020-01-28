<?php /* Template Name: contact us */ ?>
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
 <div id="banner-contact">
        
        <div data-aos="zoom-in" class="content-banner-contact">
            <h2 class="fw-500">CONTACT US</h2>
            <h5>
                   Have a project in mind? Or just want to say hi?<br> 
                   Never hesitate to contact us. <br> 
                   We’ll respond right away. Promise thing.
            </h5>
        </div>
  
</div>

<div class="form-contact">
<form action="" method="POST" >

<div class="grid-container">
<div class="grid-x grid-padding-x">
<div class="cell small-12 medium-6 large-6">  
<input type="text" id="name" placeholder="Name*">
</div>
<div class="cell small-12 medium-6 large-6">
<input type="tel" id="name" placeholder="Phone">
</div>
<div class="cell small-12 medium-6 large-6">  
<input type="email" id="email" placeholder="Email*">
</div>
<div class="cell small-12 medium-6 large-6">
       <label>
               <select >
                 <option value="">Subject*</option>
                 <option value="subject2">Subject example</option>
               </select>
             </label>
</div>
<div class="cell small-12 medium-12 large-12 my-1">
   <textarea class="message-contact" placeholder="message"></textarea>
</div>
<div class="cell small-12 medium-12 large-12 row-center">
      <button type="submit" class="button-contact">SEND</button>
</div>

</div>
</div>
</form>
</div>
<?php
get_footer();
