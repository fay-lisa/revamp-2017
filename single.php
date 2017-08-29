
<?php get_header(); ?>
	
	<!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
	<?php if(have_posts()) : ?>
       	
  <!-- loop through all post entries in chronological order, and generate their content -->
	<?php while(have_posts()) : the_post(); ?>

    <div class="banner">
			<!-- includes the page's title -->
			<h1><?php the_title(); ?></h1>
		</div><!-- banner -->
		
	</div><!-- container -->

	<hr class="no-m-t">
		
	<div class="container">		

                                
  
                                            
		<!-- add the full content, as this is an individual post -->
			<?php the_content(); ?>
			
      <hr>
      <!-- now add navigation, for moving between posts. we can change the icons/text later. -->
      <?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
			
			<hr>
								
      <!-- include the comments template -->	
      <?php comments_template(); ?>

		<?php endwhile; ?>
	<?php endif; ?>
	<!-- exit the loop, all done -->
        
   

    <aside class="margin-top-lg">
                                
      <?php get_sidebar(); ?>
                                
    </aside><!-- one-third-column -->
                            
     
<?php get_footer(); ?>
<!-- included only for the pages that feature the responsive slider -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">
  <script src="<?php echo get_template_directory_uri(); ?>/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 640
      });
    });
  </script>	