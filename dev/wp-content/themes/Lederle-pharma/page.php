<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
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

<?php get_footer(); ?>
