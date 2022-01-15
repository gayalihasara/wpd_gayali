<footer id="footer"></footer>
<?php wp_footer(); ?>

<footer class="footer-one">
   <section class="footer-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="footer-contact-details text-white">
                  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                     <h2 class="logo-text"><span style="color: ##a6a6a6;"> Back</span>Packers.</h2>
                  </a>
                  <p style="text-align: justify;">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget sapien sapien. Curabitur in metus urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget sapien sapien. Curabitur in metus urna
                  </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-3 mb-md-0" style="display: flex; justify-content: center;">
               <div class="footer-menu menu-links">
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
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 mb-3 mb-md-0" style="display: flex; justify-content: center;">
               <div class="footer-titles text-white">
                  <ul class="navbar-nav navbardropdown">
                     <li class="menu-item">
                        <a href="#!" class="text-reset nav-link">Excursions</a>
                     </li>
                     <li>
                        <a href="#!" class="text-reset nav-link">Gallery</a>
                     </li>
                     <li>
                        <a href="#!" class="text-reset">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12" style="display: flex; justify-content: center;">
               <div class="socail-media-icon">
                  <a href="#"><img src="<?php echo site_url();?>/wp-content/uploads/2022/01/facebook-app-symbol.png"></a>
                  <a href="#"><img src="<?php echo site_url();?>/wp-content/uploads/2022/01/instagram.png"></a>
                  <a href="#"><img src="<?php echo site_url();?>/wp-content/uploads/2022/01/twitter-1.png"></a>
                  <a href="#"><img src="<?php echo site_url();?>/wp-content/uploads/2022/01/linkedin.png"></a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section>
      <div class="container-fluid">
         <div class="row copyright-text-row text-center" style="background-color: #269883">
            <div class="col-lg-4">
               <p>Copyright © 2022 BackPackers. All Rights Reserved.</p>
            </div>
            <div class="col-lg-4">
               <p><a href="#">Terms & Conditions </a>|<a href="#"> Privacy Policy </a>| <a href="#">Sitemap</a></p>
            </div>
            <div class="col-lg-4">
               <p>Web Designed & Developed by <a href="https://eyepax.com/" target="_blank"> Eyepax</a></p>
            </div>
         </div>
      </div>
   </section>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
   AOS.init();
</script>

</body>
</html>