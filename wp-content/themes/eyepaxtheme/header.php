<!doctype html>
<html>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_title(); ?>
      <?php wp_head(); ?>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   </head>
   <body <?php body_class(); ?>>
      <header id="header" class="header">
         <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg nav-menu navbar-dark" role="navigation">
               <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                  <h2 class="logo-text"><span style="color: #7e7272;"> Back</span>Packers.</h2>
               </a>
               <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
                  <div id="menuToggle">
                     <input type="checkbox" />
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent1">
                  <span class="mobile-back"></span>
                  <?php wp_nav_menu(
                        array(
                           'theme_location'  => 'primary',
                        
                           'depth'           => 2,
                        
                           'menu_class'      => 'navbar-nav navbardropdown',
                        
                           'menu_id'         => 'primary',
                        
                           'walker'          => new WP_Bootstrap_Navwalker(),
                        )
                     ); ?>
               </div>
            </nav>
         </div>
      </header>

   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>