<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

 <div class="pq-breadcrumb " >
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2><?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?> </h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active"><?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></li>
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
   


   <section class="3-colume-grid ">
      <div class="container">
         <div class="row">
                           
                           <?php 
							if (have_posts()) :
							while ( have_posts() ) : the_post(); 
							$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
							?>
                            <div class="col-lg-4">
               <div class="pq-blog pq-blog-col-1">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="pq-blog-post">
                           <div class="pq-post-media"><a href="<?php the_permalink();?>"> <img src="<?php echo $image[0];?>" class="img-fluid" alt=""></a>  </div>
                           <div class="pq-blog-contain">
                              <div class="pq-post-meta">
                                 <ul>
                                    <li class="pq-post-author"><i class="fa fa-user"></i>admin</li>
                                    <li class="pq-post-comment"> <a href="#."><i class="fa fa-calendar-alt"></i>
                                       <?php echo get_the_date('d M Y');?></a> </li>
                                 </ul>
                              </div>
                              <h5 class="pq-blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                 </h5>
                              <div class="pq-blog-info">
                                 <p><?php echo substr(get_the_content(),0,150);?>.. </p>
                              </div>
                              <a href="<?php the_permalink();?>" class="pq-button pq-button-flat">
                                 <div class="pq-button-block"> <span class="pq-button-text">Read More</span> <i class="ion ion-plus-round"></i> </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                           
                           
                           
                           
                     


                            
                            <?php   endwhile; ?>
                            
                            
                            <div class="col-lg-12">
               <div class="pq-pagination">
                  <nav aria-label="Page navigation">
                       <?php
                            custom_pagination($custom_query); 
                            wp_reset_postdata();
                            else :
                            echo 'No posts found.';
                            endif;
                            ?>
                     <!--<ul class="page-numbers">
                        <li><a href="#." aria-current="page" class="page-numbers current">1</a></li>
                        <li><a class="page-numbers" href="#.">2</a></li>
                        <li><a class="next page-numbers" href="#.">Next page</a></li>
                     </ul>-->
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
                            

<?php get_footer(); ?>
