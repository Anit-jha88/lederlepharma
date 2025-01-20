<?php
/**
 * Template Name: Contact
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>

<div class="pq-breadcrumb">
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

 <section class="pq-contact-us">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="pq-contact-box">
                  <div class="pq-contact-box-icon">
                     <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-location"></i> </div>
                  </div>
                  <div class="pq-contact-box-info">
                     <h4 class="pq-contact-box-title">  Our Location </h4>
                     <p><?php echo get_field('our_location');?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-4">
               <div class="pq-contact-box">
                  <div class="pq-contact-box-icon">
                     <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-ios-telephone"></i> </div>
                  </div>
                  <div class="pq-contact-box-info">
                     <h4>Our Contact </h4>
                     <p><a href="tell:<?php echo get_field('our_contact');?>"> <?php echo get_field('our_contact');?>    </a></p>
                       
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
               <div class="pq-contact-box">
                  <div class="pq-contact-box-icon">
                     <div class="icon animation-grow"> <i aria-hidden="true" class="ion ion-email-unread"></i> </div>
                  </div>
                  <div class="pq-contact-box-info">
                     <h4> Mail Us </h4>
                     <p><a href="mailto: <?php echo get_field('e_mail_us');?>"> <?php echo get_field('e_mail_us');?></a></p> 
                 </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--=================================
         contact-us end-->
   <!--=================================
         get-in-touch start-->
   <section class="get-in-touch p-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8  pq-form-box">
               <div class="form-container">
                  <div class="pq-section pq-style-1 text-center p-0">
                     <h5 class="pq-section-title">Apply for a Job at Lederle</h5> </div>
               </div>
               <div class="pq-applyform-whitebg text-start">
                   <?php echo do_shortcode('[contact-form-7 id="8ce457a" title="Contact form 1" html_class="pq-applyform"]'); ?>
                 
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--=================================
         get-in-touch end-->
   <!--=================================
         map start-->
   <div class="map pt-0">
      <div class="pq-bg-map">
        
      <?php echo get_field('map');?>      
      
      </div>
   </div>
   
<?php get_footer(); ?>