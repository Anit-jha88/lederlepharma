<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="pq-breadcrumb" >
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav aria-label="breadcrumb">
                  <div class="pq-breadcrumb-title">
                     <h2>Search Details</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">Search</li>
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

		<?php if ( have_posts() ) : ?>

	
			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
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
			<?php
				// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				)
			);

			// If no content, include the "No posts found" template.
		else :
		?>
		<p align="center">No Result Found</p>
		<?php

		endif;
		?>

	  </div>
      </div>
   </section>


<?php get_footer(); ?>
