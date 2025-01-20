<?php
/**
 * Template Name: Carrer
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
<div class="pq-breadcrumb">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2>Career</h2> </div>
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
         conatct-us start-->

         
   <section class="about-us  ">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 pe-xl-5"> <img src="<?php echo $bannerImage; ?>" class="img-fluid wow fadeInLeft"
                  alt="home"> </div>
            <div class="col-lg-7 col-md-12 mt-4 mt-lg-0">
               <div class="pq-section pq-style-1 text-left">
                 <?php the_content();?>
               </div>
               <div class="row mt-3 mt-md-0">
                  <div class="col-lg-6 col-md-6">
                     <ul class="pq-list-check ">
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Intervention Success</span>
                        </li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Quality of Care
                              Services</span></li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Client Satisfaction</span>
                        </li>
                        <li><i aria-hidden="true" class="ion ion-checkmark-round"></i><span>Online Payment</span></li>
                     </ul>
                  </div>
              
              
               </div>
           
            </div>
         </div>
      </div>
   </section>
  
   <section class="get-in-touch p-0">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-8  pq-form-box">
               <div class="form-container">
                  <div class="pq-section pq-style-1 text-center p-0">
                     <h5 class="pq-section-title">Get in touch with us</h5> </div>
               </div>
               <div class="pq-applyform-whitebg text-start">
                  <?php echo do_shortcode('[contact-form-7 id="fb95549" title="Carrer" html_class="pq-applyform"]'); ?>
               </div>
            </div>
         </div>
      </div>
   </section><br /><br /><br /><br />
 
<?php get_footer(); ?>