<?php
/**
 * The template for displaying all single posts and attachments
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
                     <h2>Blog Details</h2> </div>
                  <div class="pq-breadcrumb-container mt-2">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>"><i class="fas fa-home mr-2"></i>Home</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
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
   
   
      <section class="blog-single ">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
               <div class="pq-blog-post">
                  <div class="pq-post-media">
                       <?php $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
                       <img src="<?php echo $image[0];?>" class="img-fluid" alt="medicate">
                 
                  </div>
                  <div class="pq-blog-contain bLogSecrion">
                     <div class="pq-post-meta">
                        <ul>
                           <li class="pq-post-author"><i class="fa fa-user"></i>Admin</li>
                           <li class="pq-post-tag"><a href="#"><i class="fa fa-calendar-alt"></i> <?php echo get_the_date('d M Y');?></a></li>
                        </ul>
                     </div>
                     <h1 ><?php the_title();?></h1>
                    <?php the_content();?>
                  
                  </div>
               </div>
             
            </div>
            <div class="col-lg-4 mt-lg-0 mt-5 sideMenu_serv">
               <div class="Sidebar-style-2">
                  <div class="pq-widget widget_block pq-widget_search">
                     <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="pq-block-search__button-outside pq-block-search__text-button pq-block-search">
                        <label for="pq-block-search__input-1" class="pq-block-search__label">Search</label>
                        <div class="pq-block-search__inside-wrapper ">
                           <input type="search" id="pq-block-search__input-1"  value="<?php echo get_search_query(); ?>" class="pq-block-search__input mb-0 " name="s" value="" placeholder="Search here" required>
                           <button type="submit" class="pq-block-search__button  ">Search</button>
                        </div>
                     </form>
                  </div>
                  <div class="pq-widget pq-widget_block">
                     <div class="pq-block-group">
                        <div class="pq-block-group__inner-container">
                           <h2>Categories</h2>
                           <ul class="pq-block-categories-list pq-block-categories">
                              <?php
                                // Get parent categories
                                $parent_categories = get_categories(array(
                                'parent' => 0 ,
                                'hide_empty' => false
                                ));
                                
                                // Loop through parent categories
                                foreach ($parent_categories as $parent_category) {
                                // Query to count posts in the current category
                                $category_post_count = new WP_Query(array(
                                'category__in' => array($parent_category->term_id),
                                'posts_per_page' => -1, // Get all posts
                                'post_status' => 'publish' // Only count published posts
                                ));
                                
                                // Output category name and post count
                                echo '<li><a href="' . esc_url(get_category_link($parent_category->term_id)) . '">' . $parent_category->name . ' </a></li>';
                                
                                // Reset post data
                                wp_reset_postdata();
                                }
                                ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                 
            </div>
         </div>
      </div>
   </div>
</section>
  
<?php get_footer(); ?>
