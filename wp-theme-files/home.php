<?php
/**
 * Template Name: Home Page
 *
 */

get_header();?>

<!-- INTRO SECTION
  ==================================================================================-->
<section class="quote">
  <div class="container">    
    <div class="row">
         <div class="col-3"></div>
         <div class="col-6 animated zoomIn delay-2s"><hr class="top"></div>
         <div class="col-3"></div>
    </div>
    <blockquote class="blockquote text-center">
       <p class="mb-0 d-flex justify-content-center word animated fadeIn delay-2s"><?php the_field('quote_message');?></p>
          <div class="row">
              <div class="col"></div>
              <div class="col-1"><hr class="bottom"></div>
              <div class="col"></div>
          </div>
          <footer class="blockquote-footer d-flex justify-content-center animated fadeIn delay-3s">
               <cite title="Source Title"><?php the_field('quote_author');?></cite>
          </footer>
    </blockquote>
      <div class="row button">
         <a class="service btn d-flex justify-content-center" href="#">Services</a>
      </div>
   </div>      
</section>
<!--WHY SECTION
  ==================================================================================-->
<section>
 <div class="container">
   <div class="row">
     <div class="col"></div>
        <div class="info col-9 d-flex justify-content-center">
           <h3 class="title animated fadeIn delay-2s"><?php the_field('title'); ?></h3>
           <div class="description animated fadeIn delay-3s">
               <p><?php the_field('description'); ?></p>
            </div>
         </div>
       <div class="col"></div>
    </div>
  </div>  
</section>
<!--SLIDER SECTION
 ==================================================================================-->
<section class="slider">
  <div class="container">
      <div class="row">
          <div class="col-6 text ">
              <h2>Do you feel</h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <?php if(have_rows('frontpage_carousel')): ?>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php $counter = 0; while(have_rows('frontpage_carousel')): the_row(); ?>	
                              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $counter; ?>" <?php if($counter == 0){ echo ' class="active"'; } ?>></li>
                        <?php $counter++; endwhile; ?>
                        </ol>
                <div class="carousel-inner">
              <?php $i=0; while(have_rows('frontpage_carousel')): the_row(); ?>
                <div class="carousel-item <?php if($i == 0){ echo 'active'; } ?>">
                  <div class="slide">
                      <?php if(get_sub_field('carousel_text')): ?>
                          <p class="animated fadeIn delay-2s"> <?php the_sub_field('carousel_text'); ?></p>
                            <?php endif;?>   
                            <?php if(get_sub_field('carousel_title')): ?>
                                    <span class="animated fadeIn delay-2s"><?php the_sub_field('carousel_title'); ?></span>
                            <?php endif;?>
                    </div><!--end of slide-->
                </div><!--end of carousel item-->
                <?php $i++;  endwhile; ?>                   
              </div><!--end of carousel-inner-->     
              <?php endif; ?> 
          </div>  <!--end of col-6--> 
        </div>       	 
      </div><!--end of row-->
  </div><!--end of cointainer-->
 </section><!--end of slider-->
<!--SERVICE SECTION
 ==================================================================================-->
 <section class="services">
   <div class="container">
    <div class="row cards">
      <div class="col-lg card">
        <div class="card-inner">          
            <div class="img img1">
              <h3><?php the_field('text_on_image_1stsp'); ?></h3>
            </div>
            <div class="card-body card_info">
              <h4><?php the_field('title_1stsp'); ?></h4>
              <p class="ser_about"><?php the_field('description_1stsp'); ?></p>
              </div>
              <div class="card-footer card_end">
                <a class="btn btn-primary btn-lg btn-block card_btn">Learn more</a>
              </div>
        </div>
      </div>
      <div class="col-lg card">
        <div class="card-inner">
            <div class="img img2">
               <h3><?php the_field('text_on_image_2ndsp'); ?></h3>
             </div>
             <div class="card-body card_info">
                 <h4><?php the_field('title_2ndsp'); ?></h4>
                 <p class="ser_about"><?php the_field('description_2ndsp'); ?></p>
             </div>
              <div class="card-footer card_end">
                <a class="btn btn-primary btn-lg btn-block card_btn">Learn more</a>
              </div>
        </div>
      </div>
     <div class="col-lg card">
       <div class="card-inner">
        <div class="img img3">
           <h3><?php the_field('text_on_image_3rdsp'); ?></h3>
         </div>
         <div class="card-body card_info">
            <h4><?php the_field('title_3rdsp'); ?></h4>
             <p class="ser_about"><?php the_field('description_3rdsp'); ?></p>
         </div>
         <div class="card-footer card_end">
            <a class="btn btn-primary btn-lg btn-block card_btn">Learn more</a>
         </div>
       </div>
       </div>
       <div class="col-lg card">
        <div class="card-inner">
             <div class="img img4">
                <h3><?php the_field('text_on_image_4thsp'); ?></h3>
              </div>
              <div class="card-body card_info">
                 <h4><?php the_field('title_4thsp'); ?></h4>
                    <p class="ser_about"><?php the_field('description_4thsp'); ?>/p>
               </div>
               <div class="card-footer card_end">
                  <a class="btn btn-primary btn-lg btn-block card_btn">Learn more</a>
               </div>
            </div>
        </div>
     </div>
   </div>
 </section>
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
<!--BIO SECTION
 ==================================================================================-->
 <section class="bio">
    <div class="container">
       <div class="row">
        <div class="col-6">
         <div class="animated fadeInLeft delay-2s bio-photo">
            <img class="img-fluid" src="<?php bloginfo('template_url');?>/images/portrait.jpg"/>
             <div class="bio-photo-background"></div>
          </div>
        </div>
         <div class="col-6">
           <h2 id="name" class="animated fadeIn delay-3s"><?php the_field('name'); ?></h2>
           <h3 id="title" class="animated fadeIn delay-3s"><?php the_field('job_position'); ?></h3>
           <p id="position" class="animated fadeIn delay-3s"><?php the_field('biography'); ?></p>
            <a class="btn btn-primary btn-lg btn-block bio_btn">Learn more</a>
          </div>
         </div>
       <div class="row">
         <div class="col-3"></div>
         <div class="col-6"><hr class="top dark"></div>
         <div class="col-3"></div>
        </div>
      </div>
  </section>
<!--SLIDER SECTION
==================================================================================-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex">
    <?php if (have_rows('bottom_slider')): ?>

      <div class="swiper-container">

        <div class="swiper-wrapper b_slide">

        <?php while (have_rows('bottom_slider')): the_row();

    $testimonial = get_sub_field('bottom-slider-testimonial');
    $author = get_sub_field('bottom-slider-author');

    ?>

 <div class="swiper-slide front_slide">
    <?php if ($testimonial): ?>
      <p class="swiper-testimonial"><?php echo $testimonial; ?></p>
    <?php endif;?>

    <?php if ($author): ?>
      <p class="swiper-author"><?php echo $author; ?></p>
      <?php endif;?>
</div>
    <?php endwhile;?>
 </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
    </div>
    </div>
    </div>
    <div class="swiper-pagination"></div>
    <?php endif;?>
  </div>  
</section>
<!--SUPPORT SECTION
==================================================================================-->
<?php if( have_rows('support') ): ?>

              <section class="support">
               
                 <div class="container-fluid">
                      <h3 class="title text-center">RCC supports the following of these organizations</h3>
                   <div class="row">
                 <div class="col"></div>
              <?php while( have_rows('support') ): the_row(); 

                // vars
                $image = get_sub_field('image');                
                $link = get_sub_field('link');

                ?>

                <div class="col-4">

                  <?php if( $link ): ?>
                    <a href="<?php echo $link; ?>">
                  <?php endif; ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                  <?php if( $link ): ?>
                    </a>
                  <?php endif; ?>

                </div>

              <?php endwhile; ?>
              <div class="col"></div>
                  </div>
                </div>
              </section>

              <?php endif; ?>

<?php get_footer();
