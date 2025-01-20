<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

$image=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');

?>

   <div class="pq-breadcrumb">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2><?php the_title();?></h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active"><?php the_title();?></li>
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
         <div class="row productsDtals">
            <div class="col-lg-5 col-md-12 pe-xl-5"> <img src="<?php echo $image[0]; ?>" class="img-fluid wow fadeInLeft"
                  alt="home"> 
               </div>
            <div class="col-lg-7 col-md-12 mt-4 mt-lg-0">
               <div class="pq-section pq-style-1 text-left">
                  <h3><?php the_title();?></h3>
                  <p><?php echo get_the_content();?></p>
               </div>
               <div class="row mt-3 mt-md-0">
                  <div class="col-lg-12 col-md-12">
                     <h5>About this item</h5>
                    <div class="table-responsive">
                     <table class="table table-striped table-sm">
                       
                        <tbody>
                          <tr>
                            <td>Generic Name:</td>
                            <td><?php echo get_field('generic_name');?></td>
                        
                          </tr>
                          <tr>
                            <td>Therapeutic Segment:</td>
                            <td><?php echo get_field('therapeutic_segment');?></td>
                          
                          </tr>
                          <tr>
                           <td>Available As:</td>
                           <td><?php echo get_field('available_as');?></td>
                         
                         </tr>
                         <tr>
                           <td>Product Type: </td>
                           <td><?php echo get_field('product_typerrr');?></td>
                         
                         </tr>
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
              
              
               </div>
           
            </div>
         </div>
      </div>
   </section>
<?php get_footer(); ?>
