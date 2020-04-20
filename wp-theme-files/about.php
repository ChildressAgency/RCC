<?php
/**
 * Template Name: About Page
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
get_header();?>

     
          <!-- INTRO SECTION
             ==================================================================================-->
           <section class="quote"> 
           <footer class="blockquote-footer d-flex justify-content-center"><cite title="Source Title"><?php the_field('mission_title'); ?></cite></footer>
           <div class="container">
           <div class="row">
               <div class="col"></div>
               <div class="col-3"><hr class="top"></div>
               <div class="col"></div>
            </div>
            <div class="row">
              <div class="col"></div>
            <blockquote class="blockquote text-center col-9">
               <p class="mb-0 d-flex justify-content-center mission"> <?php the_field('mission_message'); ?></p>
             </blockquote>
             <div class="col"></div>
             </div>
           </section>

          <!--WHY SECTION
             ==================================================================================-->
             <section>
             <div class="container">
                 <div class="row">
                      <div class="col"></div>
                         <div class="info col-9 d-flex justify-content-center">           
                             <h3 class="title"><?php the_field('1st_p_title'); ?></h3>
                                 <p class="description">
                                    <?php the_field('1st_message'); ?>
                                  </p>
                                   <p class="description">
                                    <?php the_field('2nd_message'); ?>
                                  </p>
                                   <p class="description">
                                    <?php the_field('3rd_message'); ?>
                                  </p>
                          </div>
                       <div class="col"></div>
                  </div>
              <div class="row">
                 <div class="col"></div>
                     <div class="info col-9 d-flex justify-content-center">           
                        <h3 class="title"><?php the_field('2nd_p_title'); ?></h3>
                             <p class="description">
                                <?php the_field('message'); ?> 
					    	 </p>
                     </div>
                 <div class="col"></div>
              </div>
            </section> 
          <!--ABOUT LOGO
          =================================================================================-->    
          <section>      
           <div class="container">   
             <div class="row">
                <div class="col"></div>
                <div class="col-9">
                    <img src="#">
                     <h3 class="title">Teresa Robinson M.A. </h3>
                     <h4 class="">Proffessional Councelor</h4>
                      <a class="btn btn-primary btn-lg btn-block bio_btn">Learn more</a>
                </div>
                <div class="col"></div>
              </div>  
              </div>      
             </section>        
           
           <!--Education
           =================================================================================-->  
             
             <section>
              <div class="container">
             <div class="row">
                     <div class="col"></div>
                     <div class="info col-9 d-flex justify-content-center">           
                     <h3 class="title"><?php the_field('3rd_p_title'); ?></h3>
                         <p class="description">
                            <?php the_field('3rd_p_message'); ?>
                         </p>    
                     </div>
                     <div class="col"></div>
              </div>  
              </div>      
             </section>
           <!--SPONSORS SECTION
             ==================================================================================-->
             <?php if( have_rows('about_professionals') ): ?>

              <section class="about-professionals" style="background-image: url(<?php the_field('prof_background_image'); ?>)">
               
                 <div class="container">
                      <h3 class="title text-center">Professional association membership</h3>
                   <div class="row">

              <?php while( have_rows('about_professionals') ): the_row(); 

                // vars
                $image = get_sub_field('image');                
                $link = get_sub_field('link');

                ?>

                <div class="col-3">

                  <?php if( $link ): ?>
                    <a href="<?php echo $link; ?>">
                  <?php endif; ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                  <?php if( $link ): ?>
                    </a>
                  <?php endif; ?>

                </div>

              <?php endwhile; ?>

                  </div>
                </div>
              </section>

              <?php endif; ?>

    <!--QUOTE SECTION
 ==================================================================================-->
 <section>
    <div class="container-fluid">
       <div class="row cont_green_q">
          <div class="col-12 qgreen">
              <h2 class="quote_green">
              <?php the_field('quote_w_greenbg'); ?>
               </h2>
           </div>
       </div>
     </div>
 </section>          
          
<?php
get_footer();
