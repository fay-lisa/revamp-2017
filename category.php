
<?php get_header(); ?>


  <!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
  <?php if(have_posts()) : ?>
        
  <!-- add the standard filtering code for stuff like categories, archives, tags, authors, etc -->
	<div class="banner-category">
		
    <?php /* If this is a category archive */ if (is_category()) { ?>
      <h1><?php single_cat_title(); ?></h1>
                
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
                
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h1>Archive for <?php the_time('F jS, Y'); ?>:</h1>
                
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h1>Archive for <?php the_time('F, Y'); ?>:</h1>
	
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h1>Archive for <?php the_time('Y'); ?>:</h1>
                
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h1>Author Archive</h1>
                
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h1>Blog Archives</h1>
    <?php } ?>
    
    
  </div><!-- banner -->

	<hr class="no-m-t">
	<div class="container">
		
      <!-- starts the category box unordered list -->
      <ul class="port row">
         
        <!-- loop through all post entries in chronological order, and generate their content -->
       <?php while(have_posts()) : the_post(); ?>
	
        <!-- sets up each portfolio post, creating the rounded featured image pulled from the post, and adding a  -->
            <li class="five columns">
						
              <?php if ( has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
             
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 

               <p class="no-m-b"><?php echo excerpt(30); ?></p>
                
            </li>
        

        
	<?php endwhile; ?>
            </ul><!-- ends the list -->
            
	<?php endif; ?>
	<!-- exit the loop, all done -->


<?php get_footer(); ?>