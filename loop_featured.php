
<?php

$featured_posts = new WP_Query('cat=2&posts_per_page=5');

if ($featured_posts->have_posts()): while($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
	<!-- article -->
	<article class="featured-post-item">

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?></span>
		<span class="author"><?php _e( 'by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<!-- /post details -->

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php 
    endif;
    wp_reset_postdata(); 
?>
