     <footer id="pq-footer">
      <div class="pq-footer-style-1">
      
            <div class="pq-footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-md-6">
                        <div class="pq-footer-block"> 
                          <img src="<?php echo get_field('logo','option');?>" class="pq-footer-logo img-fluid" alt="footer-logo" >
                          <p><?php echo get_field('logo_content','option');?></p> 

                          <div class="pq-footer-social">
                           <ul>
                              <li><a href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="<?php echo get_field('linklind_link','option');?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="<?php echo get_field('instagram_link','option');?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4  col-md-6">
                     <div class="pq-footer-block">
                        <h4 class="footer-title">Quick Link</h4>
                        <div class="menu-useful-links-container">
                             <?php
                                               wp_nav_menu( array(
                                                   'menu_class'=>'menu',
                                                  'menu_id' => 'menu-useful-links',
                                                   'container' => 'ul',
                                                 'menu' => 'Footer menu', // Replace 'your-menu-slug' with the actual menu slug
                       
                                                ) );
                                               ?>
                          
                        </div>
                     </div>
                  </div>
              
                        <div class="col-xl-4  col-md-6">
                           <div class="pq-footer-block">
                              <h4 class="footer-title">Contact Us</h4>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <ul class="pq-contact">
                                          <li> <i class="fas fa-map-marker"></i> <span>
                                          <?php echo get_field('address','option');?></span> </li>
                                          <li> <a href="tel:<?php echo get_field('phone_number_1','option');?>"><i class="fas fa-phone"></i>
                                             <span> <?php echo get_field('phone_number_1','option');?> </span>
                                          </a> </li>
                                          <li> <a href="tel:<?php echo get_field('phone_number_2','option');?>"><i class="fas fa-phone"></i>
                                             <span> <?php echo get_field('phone_number_2','option');?></span>
                                          </a> </li>
                                          <li> <a href="mailto:<?php echo get_field('email','option');?>"><i class="fas fa-envelope"></i><span><?php echo get_field('email','option');?></span></a> </li>
                                    
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pq-copyright-footer">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12 text-center "> <span class="pq-copyright">  &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script> Lederle Pharma Ltd All Rights Reserved | Developed by <a href="https://www.mkstechnosoft.com" class="mksTech">MKS Technosoft</a></span> </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!--Footer End-->

         <!--Back To Top start-->
         <div id="back-to-top">
            <a class="topbtn" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
         </div> 

   
<?php wp_footer(); ?>
</body>
</html>
