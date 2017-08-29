<?php 
/*
Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>


	<section class="port-1">
		<div class="container">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?> 
			<!-- add the full post, as this is a page -->
        <?php the_content(); ?>
				<!-- No metadata needed, break out of the content loop -->
      <?php endwhile; ?>
    <?php endif; ?>
<!-- exit the loop, all done -->
		</div><!-- container -->

		<div class="center">
			<a class="scroll" href="#section-4">
			<div class="arrow-down"></div></a>
		</div><!-- center -->
				
  </section>
	
</div><!-- ends container, so the bar spans browser width -->
	
	<section class="section-4" id="section-4">	
		<div class="container clearfix">
					
			<h2 class="center">Types of Sites I've Worked on:</h2>
						
			<div class="port-relative">
			<?php
			$post_id = 243;
			$queried_post = get_post($post_id);
			$content = $queried_post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			echo $content;
			?>
			</div><!-- relative -->	
						
		</div><!-- container -->
						
		<div class="center">
			<a class="scroll" href="#port-2">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

  </section>	
	
	<section class="port-2" id="port-2">
		<div class="container port">
			<h2 class="center">Darkwood Armory</h2>
			
			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/darkwood-half.jpg">
				</li>
							
				<li class="five columns omega sm-pad">
					<h1>Project</h1>
					
					<p>Requirement: Client wanted modern but still old world feel for an existing armory eCommerce site.</p>
								
					<hr class="dark">
								
					<h1>Role</h1>
								
					<p>
					<ul class="port-list">
						<li>Lead designer</li>
						<li>Front End Developer</li>
					</ul><!-- three -->
					</p>
					
					<hr class="dark">
					
					<h1>Details</h1>
					
					<p>
					<ul class="port-list">
						<li>Re-structuring of existing content</li>
						<li>Vectorized existing logo for print</li>
						<li>Adaptive framework custom written</li>
						<li>Extensive browser + device testing via BrowserStack</li>
					</ul>
				</li>
			</ul>
							
			<img src="<?php echo get_template_directory_uri(); ?>/images/port/darkwood-wide.jpg">
			
		<div class="center">
			<a class="scroll" href="#port-3">
			<div class="arrow-down"></div></a>
		</div><!-- center -->
		
		</div><!-- container -->
	</section>
				
	<section class="port-3" id="port-3">	
		<div class="container port">
			
			<h2 class="center">Ink(dot)</h2>
			
			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/ink-dot-half.jpg">
				</li>
							
				<li class="five columns omega sm-pad">
					<h1>Project</h1>
					
					<p>Requirement: To build a from-the-ground-up adaptive framework for WordPress that was light and modular. For use as a starting point for other projects.</p>
								
					<hr class="grey">
								
					<h1>Role</h1>
								
					<p>
					<ul class="port-list">
						<li>Designer</li>
						<li>Front End Developer</li>
						<li>WordPress Developer</li>
					</ul><!-- three -->
					</p>
					
					<hr class="grey">
					
					<h1>Details</h1>
					
					<p>
					<ul class="port-list">
						<li>Designed in-browser</li>
						<li>Custom-written adaptive framework</li>
						<li>Custom PHP for WP frame</li>
						<li>Extensive browser + device testing</li>
					</ul>
				</li>
			</ul>
							
			<img src="<?php echo get_template_directory_uri(); ?>/images/port/ink-dot-wide.jpg">
			
			<a class="visit-button center" href="http://www.ink.faylisa.com">See the site</a>
			
		<div class="center">
			<a class="scroll" href="#port-4">
			<div class="arrow-down"></div></a>
		</div><!-- center -->
		
    </div><!-- container -->    
  </section>	
				
	<section class="port-4" id="port-4">
		<div class="container port">
			<h2 class="center">Aquariums West</h2>
			
			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/aqwest-half.jpg">
				</li>
							
				<li class="five columns omega sm-pad">
					<h1>Project</h1>
					
					<p>(In Development)<br>
					Requirement: Update from older design with the goal of making it responsive/adaptive, and integrating eCommerce into parent site.  </p>
								
					<hr class="grey">
								
					<h1>Role</h1>
								
					<p>
					<ul class="port-list">
						<li>Lead Designer</li>
						<li>Front End Developer</li>
						<li>WordPress Developer</li>
						<li>Client Liason</li>
					</ul><!-- three -->
					</p>
					
					<hr class="grey">
					
					<h1>Details</h1>
					
					<p>
					<ul class="port-list">
						<li>Client meetings + communication</li>
						<li>Re-structuring content for 100+ page site</li>
						<li>Sitemap re-creation, call to action creation</li>
						<li>Mobile-first framework code</li>
						<li>Custom PHP for WP frame</li>
						<li>Assigning dynamic eCommerce elements to programmer</li>
						<li>Utilizing appropriate plugins for client use</li>
					</ul>
				</li>
			</ul>
							
			<img src="<?php echo get_template_directory_uri(); ?>/images/port/aqwest-wide.jpg">
			
			
			
		<div class="center">
			<a class="scroll" href="#port-5">
			<div class="arrow-down"></div></a>
		</div><!-- center -->
				
				</div><!-- container -->
				</section>
				
	<section class="port-2" id="port-5">
		<div class="container port">
			<h2 class="center">Genesis Executive</h2>
			
			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/genesis-half.jpg">
				</li>
							
				<li class="five columns omega sm-pad">
					<h1>Project</h1>
					
					<p>Requirement: Take the psd from firm's designer and write fully responsive site. </p>
								
					<hr class="dark">
								
					<h1>Role</h1>
								
					<p>
					<ul class="port-list">
						<li>Front End Developer</li>
					</ul><!-- three -->
					</p>
					
					<hr class="dark">
					
					<h1>Details</h1>
					
					<p>
					<ul class="port-list">
						<li>Responsive site</li>
						<li>Custom CSS + HTML</li>
						<li>4 breakpoints: desktop, tablet, mobile landscape, mobile portrait</li> 
						<li>Extensive commented CSS + HTML for CMS dev</li>
						<li>Delivery of 6 page layouts, all CSS + jQuery files</li>
					</ul>
				</li>
			</ul>
							
			<img src="<?php echo get_template_directory_uri(); ?>/images/port/genesis-wide.jpg">
			
		
			
		<div class="center">
			<a class="scroll" href="#port-6">
			<div class="arrow-down"></div></a>
		</div><!-- center -->
		
		</div><!-- container -->
	</section>					
		
		<section class="port-3" id="port-6">
		<div class="container port">
			<h2 class="center">Previous Projects</h2>
					<?php
						$post_id = 166;
						$queried_post = get_post($post_id);
						$content = $queried_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo $content;
						?>
		
 		</div><!-- container -->
	</section>	
  
			<div class="center">
				<a class="scroll" href="#top">
				<div class="arrow-up"></div></a>
			</div><!-- center -->
			
<!-- get the sidebars and footer -->
<?php get_footer(); ?>
