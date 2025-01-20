<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the site name.
	bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	/* translators: %s: Page number. */
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

?>
	</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	 
</head>

     
      <header id="pq-header" class="pq-header-default ">
         <div class="pq-top-header">
            <div class="container">
               <div class="row flex-row-reverse">
                  <div class="col-md-6 text-right">
                     <div class="pq-header-social text-right">
                        <ul>
                          <li><a href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="<?php echo get_field('linklind_link','option');?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                              <li><a href="<?php echo get_field('instagram_link','option');?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="pq-header-contact ">
                        <ul>
                           <li>
                              <a href="tel:<?php echo get_field('phone_number_1','option');?>"><i class="fas fa-phone"></i>
                                 <span> <?php echo get_field('phone_number_1','option');?></span>
                              </a>
                           </li>
                           <li> <a href="mailto:<?php echo get_field('email','option');?>"><i class="fas fa-envelope"></i><span><?php echo get_field('email','option');?></span></a>
                             
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pq-bottom-header pq-has-sticky">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                           <a class="navbar-brand" href="<?php echo home_url(); ?>">
                              <img class="img-fluid logo" src="<?php echo get_field('logo','option');?>" alt="logo">
                           </a>
                           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <div id="pq-menu-contain" class="pq-menu-contain">
                                <?php
                                wp_nav_menu(
                                array(
                                'theme_location' => 'primary',
                                'container' => 'ul',
                                'container_class' => 'navbar-nav ml-auto',
                                'menu_class' => 'pq-main-menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                               
                                ) 
                                );
                                ?>
                              </div>
                           </div>
                        
                         
                           <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse"-->
                           <!--   data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
                           <!--   aria-expanded="false" aria-label="Toggle navigation">-->
                           <!--   <i class="fas fa-bars"></i>-->
                           <!--</button>-->
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>


   
 

