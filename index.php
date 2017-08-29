<?php
/*
* @package WordPress
* @subpackage agskeleton
*/
get_header(); ?>

<!-- displays the WP default, a list of posts. -->

	<!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
	<?php if(have_posts()) : ?>
		<!-- loop through all post entries in chronological order, and generate their content -->
		<?php while(have_posts()) : the_post(); ?>
			<!-- start with its direct link -->
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<!-- add the thumbnail, if one exists. -->
			<?php the_post_thumbnail(); ?>

			<!-- add the excerpt, not the full post, as this is a post list and not the actual post page -->
			<?php the_excerpt(); ?>

			<!-- include the metadata -->
			<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
		<?php endwhile; ?>
		<!-- all posts added, up to the number allowed per page as set in the WP options -->
		<!-- now add navigation, for moving between pages of posts -->
        <?php posts_nav_link(); ?>
	<?php endif; ?>
	<!-- exit the loop, all done -->

<!-- get the sidebar and footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
