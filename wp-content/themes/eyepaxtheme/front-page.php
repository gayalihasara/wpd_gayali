<?php
   /*
    Template Name: Home
   */
   get_header();
   ?>

<section class="banner-section">
   <div class="container-fluid p-0">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="banner-carousel owl-carousel owl-theme owl-loaded owl-drag">
               <?php 
                  $args = array( 'post_type' => 'banner_slider', 'posts_per_page' => -1 );
                  
                  $the_query = new WP_Query( $args ); 
                  
                  ?>
               <?php if ( $the_query->have_posts() ) : ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
               <div class="item">
                  <div class="banner-slider-one" style="height: 100vh;
                     background-size: cover; background-position: center; background-image: url(<?php echo get_field('banner_image');?>);">
                     <div class="banner-details container d-flex flex-column justify-content-center w-100 h-100">
                        <div>
                           <h4><?php echo get_field("main_title") ?></h4>
                        </div>
                        <div class="text-break">
                           <h1 class="heroText"><?php echo get_field("second_main_title") ?></h1>
                        </div>
                        <h3 class="text-white"><?php echo get_field("sub_title") ?></h3>
                        <p class="text-white"><?php echo get_field("description") ?></p>
                        <div class="banner-button">
                           <a href="<?php echo get_field("button")?>" class="text-white">Explore</a>
                        </div>
                        <span class="banner-arrow"></span>
                        <div class="downarrow">
                           <i class="fa fa-chevron-down"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <?php endwhile;
                  wp_reset_postdata(); ?>
               <?php else:  ?>
               <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section class=" pt-5">
   <div class="container text-center">
      <div class="row" style="justify-content: center;">
         <div class="col-md-10">
            <h3>
               Welcome to Backpackers
            </h3>
            <p>
               <?php echo get_field("welcome_text") ?>
            </p>
         </div>
      </div>
   </div>
</section>
<section class="pt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <h3>
               Featured BackPackers...
            </h3>
               <?php echo get_field("featured_text") ?>
         </div>
         <div class="col-md-5">
            <img style = "width: 100%;" src="<?php echo site_url();?>/wp-content/uploads/2022/01/download.jpeg" />
         </div>
      </div>
   </div>
</section>

<section class="home-section pt-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <h4>
               Australia
            </h4>
            <p>
              <?php echo get_field("first_country_text") ?>
            </p>
            <p>
               <a class="btn" href="#">See More »</a>
            </p>
         </div>
         <div class="col-md-4">
            <h4>
               Europe
            </h4>
            <p>
              <?php echo get_field("second_country_text") ?>
            </p>
            <p>
               <a class="btn" href="#">See More »</a>
            </p>
         </div>
         <div class="col-md-4">
            <h4>
               Pacific
            </h4>
            <p>
               <?php echo get_field("third_country_text") ?>
            </p>
            <p>
               <a class="btn" href="#">See More »</a>
            </p>
         </div>
      </div>
   </div>
</section>

<?php
   get_footer();
?>