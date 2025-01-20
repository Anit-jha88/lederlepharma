<?php
/**
 * Template Name: Home
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>

   <div id="carouselExampleCaptions" class="carousel slide wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
   <div class="carousel-indicators">
        <?php
                                
                                $n=0;
                                if( have_rows('banner') ):
                                while( have_rows('banner') ) : the_row();
                               
                                ?>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $n;?>"  <?php if($n==0){ echo 'class="active" aria-current="true"'; }?> aria-label="Slide <?php echo $n;?>"></button>
 
       <?php $n++; endwhile; endif;?>

   </div>
   <div class="carousel-inner">
        <?php
                                
                                $n=0;
                                if( have_rows('banner') ):
                                while( have_rows('banner') ) : the_row();
                               
                                ?>
     <div class="carousel-item  <?php if($n==0){ echo 'active'; }?> ">
       <img src=" <?php echo get_sub_field('banner_image');?>" class="d-block w-100" alt=" <?php echo get_sub_field('banner_title');?>">
       <!-- <div class="carousel-caption d-none d-md-block">
         <h5>First slide label</h5>
         <p>Some representative placeholder content for the first slide.</p>
       </div> -->
     </div>
    <?php $n++; endwhile; endif;?>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>

            <!--Section about-us start-->
            <section class=" wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
               <div class="container">
                  <div class="row ">
                     <div class="col-lg-5"> <img src="<?php echo $bannerImage; ?>" class="img-fluid pe-xl-2 wow fadeInLeft" alt="home"> </div>
                     <div class="col-lg-7 ">
                        <div class="pq-section pq-style-1 text-left">
                         
                          <?php the_content();?>
                          
                        </div>
                     
                        <a class="pq-button pq-button-flat " href="<?php echo get_page_link(17);?>">
                           <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                        </a>
                     </div>
                  </div>
               </div>
            </section>
            <!--Section about-us End-->

 <!--Aboutus Start-->
 <section style="padding: 60px;" class="medic-test pq-bg-primary-dark pq-bg-img-1 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
   <div class="container">
     
       <div class="row  text-center">
          
           <div class="col-lg-4 col-md-4 mt-5 mt-md-0">
               <div class="pq-counter pq-style-1">
                   <div class="pq-counter-contain">
                       <div class="pq-counter-media">
                           <i class=" flaticon-medical-history"></i>
                       </div>
                       <div class="pq-counter-info">
                           <div class="pq-counter-num-prefix">
                               <h5 class="timer" data-to="20" data-speed="5000"><?php echo get_field('years_in_business')?></h5>
                               <span class="pq-counter-prefix">+</span>
                           </div>
                           <p class="pq-counter-description">Years in Business</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 mt-5 mt-md-0">
               <div class="pq-counter pq-style-1">
                   <div class="pq-counter-contain">
                       <div class="pq-counter-media">
                           <i class=" flaticon-medical"></i>
                       </div>
                       <div class="pq-counter-info">
                           <div class="pq-counter-num-prefix">
                               <h5 class="timer" data-to="40" data-speed="5000"><?php echo get_field('citiesr')?></h5>
                               <span class="pq-counter-prefix">+</span>
                           </div>
                           <p class="pq-counter-description">Cities</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4">
            <div class="pq-counter pq-style-1">
                <div class="pq-counter-contain">
                    <div class="pq-counter-media">
                        <i class="flaticon-medicine"></i>
                    </div>
                    <div class="pq-counter-info">
                        <div class="pq-counter-num-prefix">
                            <h5 class="timer" data-to="50" data-speed="5000"><?php echo get_field('productssss')?></h5>
                            <span class="pq-counter-prefix">+</span>
                        </div>
                        <p class="pq-counter-description">Products</p>
                    </div>
                </div>
            </div>
        </div>
           <!-- <div class="col-lg-3 col-md-3 mt-5 mt-md-0">
               <div class="pq-counter pq-style-1">
                   <div class="pq-counter-contain">
                       <div class="pq-counter-media">
                           <i class="flaticon-doctor"></i>
                       </div>
                       <div class="pq-counter-info">
                           <div class="pq-counter-num-prefix">
                               <h5 class="timer" data-to="350" data-speed="5000">350</h5>
                               <span class="pq-counter-prefix">+</span>
                           </div>
                           <p class="pq-counter-description">Employees</p>
                       </div>
                   </div>
               </div>
           </div> -->
       </div>
   </div>
</section>
<!--Aboutus End-->

    
               
                <!--Services Start-->
    <section class="explore wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="pq-section pq-style-1 text-center">
                   
                      <h5 class="pq-section-title">Our Products</h5>
                  </div>
              </div>
          </div>

          <div class="row wow animated fadeInUp">
                <?php 
                
                $args = array(
                'post_type' => 'our-product', // Custom post type
                'posts_per_page' => 4,   // Number of posts to display, -1 means all posts
                'order' => 'ASC',         // Order of the posts
                'orderby' => 'date'       // Order by date
                );
                
                // The custom query
                $custom_query = new WP_Query($args);
                
                // Check if there are any posts to display
               
                  while ($custom_query->have_posts()) : $custom_query->the_post(); 
                   $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
                ?>
              <div class="col-lg-3 col-md-3 mt-4 mt-md-0">
                  <div class="pq-service-box pq-style-5">
                      <div class="pq-service-block">
                          <div class="pq-service-img">
                              <img src="<?php echo  $image[0]; ?>" alt="Robotac DSR">
                          </div>
                          <div class="pq-service-box-info">
                              <div class="pq-info-text">
                                  <a href="<?php the_permalink();?>">
                                      <h5 class="pq-service-title"><?php the_title(); ?></h5>
                                  </a>
                              </div>
                              <a href="<?php the_permalink();?>">
                                  <div class="pq-service-icon">
                                      <i class="ti-arrow-right"></i>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
             <?php endwhile;  wp_reset_query(); ?>
          </div>
      </div>
  </section>
  <!--Services End-->
                                  
      <!--Section portfolio start-->
      <section class="pq-bg-primary-dark pb-lg-0 pq-bg-img-1 wow fadeInDown" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="pq-section pq-style-1 text-center"> 
                     <h5 class="pq-section-title pq-text-white">Our work portfolio</h5> </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12 pq-mb-130">

                     <div class="owl-carousel owl-loaded owl-drag" data-dots="true" data-nav="false" data-desk_num="4" data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="true" data-loop="true" data-margin="30">
						 <?php
                                
                               
                                if( have_rows('work_portfoliorrrr') ):
                                while( have_rows('work_portfoliorrrr') ) : the_row();
                               
                                ?>
                     <div class="item">
                        <div class="pq-portfoliobox pq-style-1">
                           <div class="pq-portfolio-img"> <img src="<?php echo get_sub_field('portfolio_image'); ?>" class="img-fluid" alt="<?php echo get_sub_field('portfolio_name'); ?>">
                           
                           </div>
                        </div>
                     </div>
                 
                    <?php endwhile; endif;?>
                          
                           
                             
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <!--Section portfolio End-->
     
      <!--Section form start-->
      <section class="pq-form wow fadeInDown"  data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;" >
         <div class="container">
            <div class="row formLeft pq-bg-primary-dark ">
               <div class="col-lg-4 "> 
                  <div class="pq-section pq-style-1 text-left">
                     <h5 class="pq-section-title pq-text-white">Send us a message</h5> 
                     <p>If you have any questions and comments, please use the information below</p>
                  </div>
                  <ul class="homePageFc">
                   
                
                                          <li> <a href="tel:<?php echo get_field('phone_number_1','option');?>"><i class="fas fa-phone"></i>
                                             <span> <?php echo get_field('phone_number_1','option');?> </span>
                                          </a> </li>
                                          <li> <a href="tel:<?php echo get_field('phone_number_2','option');?>"><i class="fas fa-phone"></i>
                                             <span> <?php echo get_field('phone_number_2','option');?></span>
                                          </a> </li>
                                          <li> <a href="mailto:<?php echo get_field('email','option');?>"><i class="fas fa-envelope"></i><span><?php echo get_field('email','option');?></span></a> </li>
                                    
               
               </ul>
               </div>
               <div class="col-lg-8  pq-form-pad " >
                   
                    <?php echo do_shortcode('[contact-form-7 id="8ce457a" title="Contact form 1" html_class="pq-applyform"]'); ?>
               
                 
               </div>
            </div>
         </div>
      </section>

    
            
<?php get_footer(); ?>