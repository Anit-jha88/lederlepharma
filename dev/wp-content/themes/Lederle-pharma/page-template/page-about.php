<?php
/**
 * Template Name: About
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>
<?php
/**
 * Template Name: Project
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
endif;

?>
<div class="mobile-header d-lg-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="<?php echo home_url(); ?>"><img class="img-responsive d-inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                alt="logo.png" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="mobile-menu-toggle align-self-center">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
</div>
    <!-- Mobile Header Section End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="top-header-mobile">
                <div class="contact-link">
                    <div class="data phone">
                       <a href="tel:<?php echo get_field('header_phone','option');?>"><i class="fa fa-phone" aria-hidden="true"></i> Phone:
                                        <?php echo get_field('header_phone','option');?></a>
                    </div>
                    <div class="data email">
                       <a href="mailto:<?php echo get_field('header_email','option');?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email:
                           <?php echo get_field('header_email','option');?> </a>
                    </div>
                    <div class="donate-btn data">
                        <a class="btn btn-primary d-inline-block btn-hover-dark" href="<?php echo get_page_link(23);?>">Donate</a>
                    </div>
                </div>
            </div>
          
            <div class="menu-close">
                menu
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
               
                    <li><a href="#"><span class="menu-text">About Us</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo get_page_link(11);?>">About Vishwa Jhanani</a></li>
                            <li><a href="<?php echo get_page_link(13);?>">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_page_link(15);?>">Our Services</a></li>
                    <li><a href="<?php echo get_page_link(17);?>">Projects</a></li>
                    <li><a href="<?php echo get_page_link(19);?>">Gallery</a></li>
                    <li><a href="<?php echo get_page_link(21);?>">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li><a class="facebook" title="Facebook" href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a class="twitter fa fa-twitter" title="Twitter" href="<?php echo get_field('twitter_link','option');?>" target="_blank"></a></li>
                 
                    <li><a class="youtube fa fa-youtube" title="Youtube" href="<?php echo get_field('youtube_link','option');?>" target="_blank"></a></li>
                    <li><a class="youtube fa fa-instagram" title="Youtube" href="<?php echo get_field('insta_link','option');?>" target="_blank"></a></li>
                   
                </ul>
            </div>
        </div>
    </div>
  
    <div class="offcanvas-overlay"></div>
 <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area d-flex" >
        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="breadcrumb-content text-center ">
                        <h2><?php the_title();?></h2>
                        <ul class="nav">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                             <li><?php the_title();?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="about-area pb-100px pt-100px">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-lg-6 banner-area" data-aos="fade-left">
                    <div class="about-left-image mb-md-30px mb-lm-30px banner-wrapper">
                        <img src="<?php echo $bannerImage;?>" alt="" class="img-responsive w-100" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title section-title-left mb-20px " data-aos="fade-up">
                        <h2 class="title"><?php the_title();?></h2>
                    </div>
                    <div class="about-content">
                       <?php the_content();?>
                       
                    </div>
                </div>
            </div>
         
        
        </div>
    </div>
     <div class="about-area pb-100px pt-100px skyBg">
    <div class="container">
        <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-lg-6 banner-area" data-aos="fade-left">
                <div class="about-left-image mb-md-30px mb-lm-30px banner-wrapper">
                    <img src="<?php echo get_field('what_we_do_image'); ?>" alt="" class="img-responsive w-100" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title section-title-left mb-20px " data-aos="fade-up">
                    <h2 class="title"> <?php echo get_field('what_we_do_title'); ?></h2>
                </div>
                <div class="about-content">
                   <?php echo get_field('what_we_do_content'); ?>
                
                   
                </div>
            </div>
        </div>
      
      
    </div>
</div>
<!-- what we do End -->

   

      <!-- Feature Area Start -->
      <div class="feature-area position-relative overflow-hidden pt-100px pb-100px bg-white-2">
        <div class="container">
            <div class="row">
                <!-- Start section title -->
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title">
                        <h5><mark><?php echo get_field('mission_vision_section_title'); ?>
                        </mark> </h5>
                     
                    </div>
                </div>
                <!-- End section title -->
            </div>
            <div class="row ">
                <!-- Start single feature -->
                <div class="col-md-6 col-lg-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-wrapper feature-wrapper-2">
                        <div class="feature-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision-statement.png" />
                        </div>
                        <div class="feature-text">
                            <h5 class="feature-heading">Vision Statement</h5>
                            <p>" <?php echo get_field('vision_statement'); ?>"
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End single feature -->
                <!-- start single feature -->
                <div class="col-md-6 col-lg-6 mb-lm-30px mb-md-30px" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-wrapper feature-wrapper-2">
                        <div class="feature-icon">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission-statement.png" />
                        </div>
                        <div class="feature-text">
                            <h5 class="feature-heading">Mission Statement</h5>
                            <p>"<?php echo get_field('mission_statement'); ?>"</p>
                        </div>
                    </div>
                </div>
                <!-- End single feature -->
               
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

    <!-- Volunteer Area Start -->
    <div class="volunteer-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <!-- Start section title -->
                <div class="col-md-12 " data-aos="fade-up">
                    <div class="section-title section-title-left">
                       <?php echo get_field('impact'); ?>
                    </div>
                </div>
                <!-- End section title -->
            </div>
         
        </div>
    </div>
    <!-- Volunteer Area End -->
  
 <!-- Volunteer Area Start -->
 <div class="volunteer-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <!-- Start section title -->
            <div class="col-md-12 " data-aos="fade-up">
                <div class="section-title section-title-left">
                    <h2 class="title"> Frequently Asked Questions</h2>
                    <div id="faq" class="panel-group">
                         <?php
                                
                                $n=1;
                                if( have_rows('faq') ):
                                while( have_rows('faq') ) : the_row();
                               
                                ?>
                        <div class="panel panel-default single-my-account" data-aos="fade-up" data-aos-delay="200">
                            <div class="panel-heading my-account-title">
                                <h3 class="panel-title"><span><?php echo $n; ?> .</span> <a data-bs-toggle="collapse"
                                        href="#my-account-<?php echo $n; ?>" class="collapsed" aria-expanded="<?php  if($n==1){ echo  'true'; }else { echo 'false'; }?>"><?php echo get_sub_field('question');?></a></h3>
                            </div>
                            <div id="my-account-<?php echo $n; ?>" class="panel-collapse collapse <?php  if($n==1){ echo  'show'; }?>" data-bs-parent="#faq">
                                <div class="panel-body">
                                   <?php echo get_sub_field('answer');?>
                                </div>
                            </div>
                        </div>
                     
                       <?php $n++; endwhile; endif;?>

                       
                    </div>
                </div>
            </div>
            <!-- End section title -->
        </div>
     
    </div>
</div>

<?php get_footer(); ?>