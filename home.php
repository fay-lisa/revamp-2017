<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<!-- start the WordPress loop. using typical if-endif/while-endwhile for now. -->
	<section class="animate center">
		<?php if(have_posts()) : ?>
      <!-- loop through all post entries in chronological order, and generate their content -->
      <?php while(have_posts()) : the_post(); ?>
				<!-- add the full post, as this is a page -->
        <?php the_content(); ?>
      <?php endwhile; ?>
		<?php endif; ?>
		<!-- exit the loop, all done -->

		<div class="center">
			<a class="scroll ps2id" href="#section-4">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

  </section><!-- animate -->


	<section class="section-4" id="section-4">
		<div class="container clearfix">

			<h2 class="center">Expertise</h2>

			<div class="relative">
				<ul class="slide">
					<li class="expertise-1 fadeRightAndGo white"><strong>Hand-written CSS + HTML</strong></li>
					<li class="expertise-2 fadeRightAndGo cream">Responsive Design</li>
					<li class="expertise-4 fadeRightAndGo white"><strong>Graphic Art</strong></li>
					<li class="expertise-3 fadeRightAndGo green">WordPress Dev</li>
					<li class="expertise-4 fadeRightAndGo white">Project Management</li>
				</ul>

				<ul class="slide">
					<li class="expertise-7 fadeRightAndGo cream">Client Relations</li>
					<li class="expertise-8 fadeRightAndGo green">jQuery</li>
					<li class="expertise-9 fadeRightAndGo cream">Adaptive Design</li>
					<li class="expertise-10 fadeRightAndGo white"><strong>Adobe Suite</strong></li>
					<li class="expertise-11 fadeRightAndGo cream">UX Design</li>
					<li class="expertise-12 fadeRightAndGo green">Branding</li>
				</ul>
			</div><!-- relative -->

		</div><!-- container -->

		<div class="center">
			<a class="scroll ps2id" href="#section-3">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

  </section>

	<section class="section-3" id="section-3">
		<div class="container">

			<h2>Recent Work</h2>
				<ul class="port row center">
					<li class="five columns">
					<a href="portfolio#port-2"><img src="<?php echo get_template_directory_uri(); ?>/images/port/darkwood-half.jpg"></a>
					</li>

					<li class="five columns">
					<a href="portfolio#port-3"><img src="<?php echo get_template_directory_uri(); ?>/images/port/inkdot.jpg"></a>
					</li>

					<li class="five columns">
					<a href="portfolio#port-4"><img src="<?php echo get_template_directory_uri(); ?>/images/port/aqwest-home.jpg"></a>
					</li>
				</ul>

			<div class="margin-b">
				<a class="visit-button center" href="portfolio/">See more work</a>
			</div><!-- margin-b -->

		</div><!-- container -->
	</section>

	<div class="center">
		<a class="scroll ps2id" href="#top">
		<div class="arrow-up"></div></a>
	</div><!-- center -->

<!-- get the sidebars and footer -->
<?php get_footer(); ?>
