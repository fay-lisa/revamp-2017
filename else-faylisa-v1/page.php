<?php get_header(); ?>
<!-- basic page template -->
<div class="container">


	<!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
	<?php if(have_posts()) : ?>
		<!-- loop through all post entries in chronological order, and generate their content -->
		<?php while(have_posts()) : the_post(); ?> 
			<!-- start with title. No link needed for a page template. add the edit button under it just in case. -->
			
			<?php edit_post_link('Edit', ' &#124; ', ''); ?>

			<!-- add the full post, as this is a page -->
			<?php the_content(); ?>
	
			<!-- No metadata needed, break out of the content loop -->
		<?php endwhile; ?>
		<!-- all posts added, up to the number allowed per page as set in the WP options -->
	<?php endif; ?>
	<!-- exit the loop, all done -->




  <?php get_sidebar(); ?>


<?php get_footer(); ?>