<?php
/**
 * Template Name: our-pillars
 
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
         banner end-->
   <!--=================================
         single-team start-->
   <section class="single-team  Urpillers">
      <div class="container">
         <div class="row ">
            <div class="col-xl-4">
               <div class="pq-patient-img"> <img src="<?php echo $bannerImage;?>" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-xl-8 mt-xl-0 mt-4 ps-xl-5">
               <div class="pq-section pq-style-1 text-left">
                  <!-- <h2>Director Message</h2> -->
                  <?php the_content();?>
               </div>

            
            </div>
         </div>
      </div>
   </section>
  
   <section class="medic-test pq-bg-primary-dark pq-bg-img-1 dividerB">
      <div class="container">
         <div class="row  text-center">
            <div class="col-lg-12 col-md-12">
               <h3>Board of Directors</h3>
            </div>
         </div>
      </div>
   </section>
   
        <?php
        
        
        if( have_rows('board_of_directors') ):
        while( have_rows('board_of_directors') ) : the_row();
        
        ?>

   <section class="single-team  Urpillers">
      <div class="container">
         <div class="row  ">
            <div class="col-xl-4">
               <div class="pq-patient-img"> <img src=" <?php echo get_sub_field('directors_pic');?>" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-xl-8 mt-xl-0 mt-4 ps-xl-5">
               <div class="pq-section pq-style-1 text-left">
                  <h3><?php echo get_sub_field('directors_name');?></h3>
                  <h5><?php echo get_sub_field('directors_deg');?></h5>
                 <?php echo get_sub_field('directors_description');?>
               </div>

            </div>
         </div>
      </div>
   </section>

 <?php endwhile; endif;?>

   <section class="medic-test pq-bg-primary-dark pq-bg-img-1 dividerB">
      <div class="container">
         <div class="row  text-center">
            <div class="col-lg-12 col-md-12">
               <h3>Our Certifications</h3>
            </div>
         </div>
      </div>
   </section>

   <section class="single-team  Urpillers">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <?php 
                    
                    $images = get_field('certification_gallery');
                    foreach( $images as $image ):
                    
                    
                    
                    ?>
            <div class="col-xl-2 col-sm-6">
               <div class="pq-patient-img"> <img src="<?php echo esc_url($image); ?>" class="img-fluid" alt=""> </div>
            </div>
             <?php endforeach; ?>
      </div>
   </section>
<?php get_footer(); ?>