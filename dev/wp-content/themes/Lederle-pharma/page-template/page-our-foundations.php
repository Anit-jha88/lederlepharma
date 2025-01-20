<?php
/**
 * Template Name: Our Foundations
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>
<?php
/**
 * Template Name: Project
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
  <div class="pq-breadcrumb" >
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2><?php the_title()?></h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active"><?php the_title()?></li>
                     </ol>
                  </div>
               </nav>
            </div>
            <div class="col-lg-4">
               <div class="pq-breadcrumb-img text-right wow fadeInRight"></div>
            </div>
         </div>
      </div>
   </div>
   <!--=================================
         Banner end-->
   <!--=================================
         about-us start-->
         <section class="about-us">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 pe-xl-3"> <img src="<?php echo $bannerImage;?>" class="img-fluid wow fadeInLeft" alt="home"> </div>
                  <div class="col-xl-7 px-xl-4 mt-4 mt-xl-0">
                     <div class="pq-section pq-style-1 text-left"> 
                        <?php the_content();?>
                     </div>
                
                  </div>
               </div>
            </div>
         </section>

         <section class="pq-70 pb-0 text-center" style="padding-top: 0px;">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="text-container pb-3">
                        <h2 class=""><?php echo get_field('our_mission_title');?>
                        </h2> </div>
                  </div>
                  <p><?php echo get_field('our_mission_content');?></p>
               </div>
            </div>
         </section>

         <section class="pq-70 pb-0 text-center">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="text-container pb-3">
                        <h2 class=""><?php echo get_field('join_us_title');?>
                        </h2> </div>
                  </div>
                  <p><?php echo get_field('join_us_content');?></p>
                 
               </div>
            </div>
         </section>
    
   <section class="our-team ">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="pq-section pq-style-1 text-center">
                  <h5 class="pq-section-title"><?php echo get_field('team__title');?></h5> </div>
            </div>
         </div>
         <div class="row justify-content-center ">
              <?php
            
            
            if( have_rows('team') ):
            while( have_rows('team') ) : the_row();
            
            ?>
            <div class="col-xl-3 col-md-6 col-sm-12">
               <div class="pq-team pq-team-style-1  ">
                  <div class="pq-team-box pq-style-1">
                     <div class="pq-team-img"> <img src="<?php echo get_sub_field('team_image');?>" class="img-fluid" alt="team-image">
                      
                     </div>
                     <div class="pq-team-info">
                        <h5 class="pq-member-name">
                           <a href="#."><?php echo get_sub_field('team_name');?></a>
                        </h5> <span class="pq-team-designation"><?php echo get_sub_field('team_');?></span> </div>
                  </div>
               </div>
            </div>
         <?php endwhile; endif;?>
         
          
         </div>
     
      </div>
   </section>
<?php get_footer(); ?>