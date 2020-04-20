<?php
/**
 * Template Name: Type_of_counceling Page
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
            <div class="animated zoomIn delay-2s col-6"><hr class="top"></div>
               <div class="col-3"></div>
         </div>
         <blockquote class="blockquote text-center">
            <p class="mb-0 d-flex justify-content-center word"><?php the_field('top_quote'); ?></p>
               <div class="row">
                  <div class="col"></div>
                  <div class="col-1"><hr class="bottom"></div>
                  <div class="col"></div>
               </div>
               <footer class="blockquote-footer d-flex justify-content-center"><cite title="Source Title"><?php the_field('author_of_the_quote'); ?></cite></footer>
         </blockquote>
    </div>   
</section>
<!--WHY SECTION
             ==================================================================================-->
<section>
  <div class="container">
      <div class="row">
         <div class="col"></div>
               <div class="info col-9 d-flex justify-content-center">
                  <h3 class="title"><?php the_field('title'); ?></h3>
                  
                        <?php if( have_rows('message') ): ?>
                           
                           <div class="description">
                              <?php while( have_rows('message') ): the_row(); 
                           
                                 // vars
                                 
                                 $content = get_sub_field('content');
                              
                           
                                 ?>
                           
                                 <p class="description">
                                    <?php echo $content; ?>
                           
                                 </p>
                           
                              <?php endwhile; ?>
                           
                              </div>
                           
                           <?php endif; ?>
                     
                     
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
             <h2 class="animated zoomIn delay-2s quote_green">
               <?php the_field('quote_w_greenbg'); ?>
             </h2>
          </div>
      </div>
   </div>
</section>


<?php
get_footer();


