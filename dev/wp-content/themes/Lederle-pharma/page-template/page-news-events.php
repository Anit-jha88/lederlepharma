<?php
/**
 * Template Name: News Events
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
   <div class="pq-breadcrumb" >
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2>News & Events</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">News & Events</li>
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
  <section class="pq-70 text-center">
      <div class="container">
         <div class="row">
            <?php
            
            
            if( have_rows('news_&_events') ):
            while( have_rows('news_&_events') ) : the_row();
            
            ?>
            <div class="col-md-12">
               <div class="text-container pb-4">
                  <h2 class=""><?php echo get_sub_field('news_&_events_name');?></h2> 
               </div>
            </div>
            <div class="photo-gallery">
               <div class="container">
                  <div class="row photos">
                    <?php 
                    
                    $images = get_sub_field('news_&_events_gallery');
                    foreach( $images as $image ):
                    
                    
                    
                    ?>
                       <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo esc_url($image); ?>" data-lightbox="photos"><img class="img-fluid" src="<?php echo esc_url($image); ?>"></a></div>
                       <?php endforeach; ?>
                    </div>
               </div>
           </div>
        <?php endwhile; endif;?>
         </div>
      </div>
   </section>
<?php get_footer(); ?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>