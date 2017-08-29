
<?php get_header(); ?>
	
	<!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
	<?php if(have_posts()) : ?>
       	
        
        <!-- loop through all post entries in chronological order, and generate their content -->
		<?php while(have_posts()) : the_post(); ?>

                                <!-- gives the heading the same margins as content  -->
                                <div class="g1 margin-t35">	
			<!-- start with its direct link -->
			<h2><?php the_title(); ?></h2> 
                                </div><!-- g1 --> 
                                
                                <hr class="no-m-b">
                                  
                                <div class="g1">
                                    
                                    <em>
                                        <?php _e('Author:'); ?> <?php  the_author(); ?> on  <?php the_date(); ?>

                                        <?php _e('Found in&#58;'); ?> <?php the_category(', ') ?>
                                    </em>
                                    
                                </div><!-- g1 -->
                                
                                <div class="g60 margin-t35">
                                            
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
        
                            </div><!-- g75 -->

                            <div class="g3 margin-t35">
                                
                                    <?php get_sidebar(); ?>
                                
                            </div><!-- g3 -->
                            
     
<?php get_footer(); ?>