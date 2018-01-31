<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package croutdoortours
 */

get_header(); ?>

	 <section class="banner">
            
            <div class="loader">Loading...</div>
            
            <div class="cycle-slideshow" 
                    data-cycle-fx="fade"
                    data-cycle-timeout="4000"
                    data-cycle-slides=".banner-slide"
                    >
                    
                    <div class="cycle-pager banner-pager"></div>

                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.jpg');">
                        
                        <div class="banner-slide-info">
                            <h1 class="banner-slide-title">
                                    Lorem ipsum dolor
                            </h1>
                            <p class="banner-slide-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="banner-slide-buttons">
                                <a href="#" class="btn">Learn More</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg');">
                        
                        <div class="banner-slide-info">
                            <h1 class="banner-slide-title">
                                    Lorem ipsum dolor
                            </h1>
                            <p class="banner-slide-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="banner-slide-buttons">
                                <a href="#" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                
                    
            </div>    
        </section>
        <section class="info-top">
            <div class="info-top-container">
                <div class="info-top-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    <a href="<?php echo esc_url(home_url('/tours')); ?>" class="btn">Choose your adventure</a>
                </div>
                <div class="info-top-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/binoculares.jpg" alt="Image" />
                </div>
            </div>
        </section>
        <section class="featured-items">
            <h1 class="featured-items-title">Featured Tours</h1>
            <div class="featured-items-container">
                <div class="grid-sizer"></div>
                <?php
                $args = array(
                    'post_type' => 'tour',
                        //'order' => 'ASC',
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 6
                    

                );


                $items = new WP_Query($args);
                    // Pagination fix
                $temp_query = $wp_query;
                $wp_query = null;
                $wp_query = $items;
                $index = 0;
                if ($items->have_posts()) {
                    while ($items->have_posts()) {
                        $items->the_post();

                        ?>
                         <?php if (has_post_thumbnail()) :

                            $id = get_post_thumbnail_id($post->ID);
                            $thumb_url = wp_get_attachment_image_src($id, 'featured-item', true);
                           
                        ?>
                            <?php else:  
                                $thumb_url = ''; ?>     
                                            
                              <?php endif; ?>
                        <div class="featured-items-item <?php echo ($index == 0 || $index == 3) ? 'featured' : '' ?>" style="background-image: url('<?php echo $thumb_url[0] ?>')">
                                <a href="<?php the_permalink(); ?>" class="featured-items-item-overlay"></a>
                                <a href="<?php the_permalink(); ?>" class="featured-items-item-link">
                                    <span class="featured-items-item-title"><?php the_title(); ?></span>
                                    <span class="featured-items-item-icon"><i class="icon-neuter"></i></span>
                                </a>
                            
                         </div>

    
                        
                        
                        <?php

                        $index++;
                    }
                }

                ?>


               
               
               
            </div>
        </section>
        <section class="info-bottom">
            <div class="info-bottom-container">
                <div class="info-bottom-content">
                    <h2>Lorem ipsum dolor sit amet</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. </p>
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn">Contact us</a>
                </div>
                
            </div>
        </section>
       <section class="photos">
            <div class="photos-container">
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo2.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo3.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo4.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo5.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo6.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo2.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo3.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo4.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo5.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo6.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo2.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo3.jpg" alt=""> </a>
                <a href="#" class="photos-item"><img src="<?php echo get_template_directory_uri(); ?>/img/photo4.jpg" alt=""> </a>
            </div>
        </section>

<?php
//get_sidebar();
get_footer();
