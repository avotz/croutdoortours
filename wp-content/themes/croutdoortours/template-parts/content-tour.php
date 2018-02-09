<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package croutdoortours
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
                <?php
                if (is_singular()) :
                    the_title('<h1 class="entry-title">', '</h1>');
                else :
                    the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                endif;

                ?>
            </header><!-- .entry-header -->
    <div class="tour-container flex-container-sb">
		<div class="tour-media">
           

            <?php /*croutdoortours_post_thumbnail();*/ ?>
            <div id="slider-gallery" class="slider-gallery owl-carousel">
               <?php $images = rwmb_meta( 'rw_gallery', 'type=image&size=item-gallery' ); 
	             if ( $images ) : ?>
	             
	             	 
	               
	                     <?php foreach ( $images as $image ){?>

	                     		<div class="item" style="background-image: url('<?php echo $image['url'] ?>');"></div>
	                         
	                      <?php } ?>
                
                <?php else: ?>

                    <?php if (has_post_thumbnail()) :

                        $id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($id, 'item-gallery', true);
                    ?>
					    	
							<div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
					  	  		
					  	  	</div>
							
					
					  	 
					<?php endif; ?>
	           
                 <?php endif; ?>
            </div>

            
        </div>
        <div class="tour-info">
             
            <ul id="tabs">
                <li><a href="#" name="tab-description">Description</a></li>
                <li><a href="#" name="tab-details">Details</a></li>
                <li><a href="#" name="tab-book">Book</a></li>
            </ul>

            <div id="content-tabs"> 
                <div id="tab-description">
                    <?php
                    the_content(); ?>
                </div>
                <div id="tab-details">
                <?php
                    echo do_shortcode(rwmb_meta('rw_details')); ?>
                
                </div>
                <div id="tab-book">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]');
                        ?>      
                </div>
                
            </div>
           
        </div>
    </div>
	
</article><!-- #post-<?php the_ID(); ?> -->
