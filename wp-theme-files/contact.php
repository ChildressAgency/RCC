<?php
/**
 * Template Name: Contact Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<!-- INTRO SECTION
             ==================================================================================-->
<section class="quote">
  <div class="container">
      <div class="row">
         <div class="col-3"></div>
         <div class="col-6"><hr class="top"></div>
         <div class="col-3"></div>
      </div>
      <blockquote class="blockquote text-center">
         <p class="mb-0 d-flex justify-content-center word"><?php the_field('top-quote'); ?></p>
            <div class="row">
               <div class="col"></div>
               <div class="col-1"><hr class="bottom"></div>
               <div class="col"></div>
            </div>
            <footer class="blockquote-footer d-flex justify-content-center"><cite title="Source Title"><?php the_field('quote_author'); ?></cite></footer>
      </blockquote>
   </div>   
</section>
<!--FORM SECTION
             ==================================================================================-->
<section>
  <div class="container-fluid">
    <div class="row">
       <div class="col-3 dial" style="background-image: url(<?php the_field('contact_background_image'); ?>)"></div>
            <div class="contact col-9 d-flex ">
                <h3 class="title">Get In Touch <br>
                With Teresa Robinson</h3>
                <form>
  <div class="form-group col-6">
  <input type="text" class="form-control" placeholder="First name">
  </div>
  <div class="form-group col-6">
  <input type="text" class="form-control" placeholder="Last name">
  </div>
  <div class="form-group col-6">    
 <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="Ex.123-564-8910">
 </div>
 <fieldset class="form-group">
    <div class="row">
      <legend class="">Have you been here before?</legend>
      <div class="">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Yes
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            No
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
             </div>
         <div class="col"></div>
       </div>
   </div>    
</section>
<!--QUOTE SECTION
             ==================================================================================-->
<section>
   <div class="container-fluid cont_green_q">
       <div class="row">
          <div class="col-12 qgreen">
             <h2 class="quote_green">
                "Free yoursefl from stress of life with holistic therapy"
             </h2>
          </div>
      </div>
   </div>
</section>


<?php
get_footer();


