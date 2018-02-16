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
 * Template Name: Page Tours 
 * @package croutdoortours
 */

$categories = get_terms(array(
    'taxonomy' => 'tour-category',
    'hide_empty' => false

));

$categorySelected = get_query_var('tour-category');

get_header(); ?>

	<div class="main">
		<div class="inner">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
            </div><!-- #inner -->
          
           <div class="tours-filters">
					<form method="get" action="<?php echo esc_url(home_url('/tours/?tour-category=' . $categorySelected)); ?>" class="form-filters-tour">
						
						<div class="form-filters-tour-item">
						<label for="location">Choose tour category</label>
							<select name="tour-category" id="tour-category" style="width: 100%">
							    <option value=""></option>
								<?php foreach ($categories as $cat) : ?>
									<option value="<?php echo $cat->slug ?>" <?php if ($categorySelected == $cat->slug) echo 'selected' ?> ><?php echo $cat->name ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</form>
					
				</div>
            <div class="featured-items-container">
                <div class="grid-sizer"></div>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                if ($categorySelected) {
                    $args = array(
                        'post_type' => 'tour',
                        //'order' => 'ASC',
                        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                        'posts_per_page' => 12,
                        'paged' => $paged,
                        'tax_query' => array(

                            array(
                                'taxonomy' => 'tour-category',
                                'field' => 'slug',
                                'terms' => $categorySelected,
                            ),

                        )

                    );

                } else {
                    $args = array(
                        'post_type' => 'tour',
                        //'order' => 'ASC',
                        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                        'posts_per_page' => 12,
                        'paged' => $paged,


                    );
                }

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
                            <?php else :
                                $thumb_url = ''; ?>     
                                            
                              <?php endif; ?>
                        <div class="featured-items-item" style="background-image: url('<?php echo $thumb_url[0] ?>')">
                                <a href="<?php the_permalink(); ?>" class="featured-items-item-overlay"></a>
                                <a href="<?php the_permalink(); ?>" class="featured-items-item-link">
                                    <span class="featured-items-item-title"><?php the_title(); ?></span>
                                    <!-- <span class="featured-items-item-icon"><i class="icon-neuter"></i></span> -->
                                </a>
                            
                         </div>

    
                        
                        
                        <?php

                        $index++;
                    }
                }
               
                ?>


               
               
               
            </div>
            <div class="inner">
                <?php the_posts_pagination(array('mid_size' => 2));
                wp_reset_postdata();
                ?>
            </div>
            
        

		
	</div><!-- #main -->

<?php
//get_sidebar();
get_footer();
