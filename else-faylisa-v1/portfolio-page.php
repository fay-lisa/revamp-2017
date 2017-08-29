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
			<a class="scroll ps2id" href="#section-4">
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
			<a class="scroll ps2id" href="#port-2">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

  </section>

	<section class="port-2" id="port-2">
		<div class="container port">
			<h2 class="center">CSS Poet-ing</h2>

			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/code-snapshot2.jpg">
				</li>

				<li class="five columns omega sm-pad">
					<h1>Projects</h1>

					<p>Building the entire CSS + HTML framework for the Angular JS guts that make the company's flagship product tick.</p>

					<hr class="dark">

					<h1>Role</h1>

					<p>
					<ul class="port-list">
						<li>CSS Poet</li>
						<li>Front End Developer</li>
					</ul><!-- three -->
					</p>

					<hr class="dark">

					<h1>Details</h1>

					<p>
					<ul class="port-list">
						<li>Writing all the CSS in .less format for company's flagship product</li>
						<li>Creating and maintaining .less + HTML framework for custom award-winning apps for clients worldwide</li>
						<li>Bridging the gap between design team and programming team</li>
						<li>Browser, device testing; writing maintainable code base with documentation</li>
						<li>Maintaining the framework, consistently improving as new modules come down the pipeline</li>
					</ul>
				</li>
			</ul>


		<div class="center">
			<a class="scroll ps2id" href="#port-2-5">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

		</div><!-- container -->
	</section>

	<section class="port-2-5" id="port-2-5">
		<div class="container port">

			<h2 class="center">CodePens</h2>

			<a class="visit-button center" href="http://codepen.io/fay-lisa/" target="_blank">See them all at the source</a>

			<ul class="row">
				<li class="eight columns alpha">
					<h1>Text that animates, and stays</h1>
					<p>Example of text that presents itself using staggered timelines. *Hint - hit 'rerun' when hovering over the output section to see it run again. It runs on load of a page. Or, <a href="http://codepen.io/fay-lisa/pen/QKWkLA/" target="_blank">visit the codepen itself to see all the code.</a></p>
					<div class="codepen-eg">
						<p data-height="470" data-theme-id="light" data-slug-hash="QKWkLA" data-default-tab="result" data-user="fay-lisa" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/fay-lisa/pen/QKWkLA/">Fade-In and Stay animation CSS3</a> by fay-lisa (<a href="http://codepen.io/fay-lisa">@fay-lisa</a>) on <a href="http://codepen.io">CodePen</a>.</p>
					</div>
				</li>

				<li class="eight columns omega ">
					<h1>Tactfully animated form fields</h1>
					<p>Forms are a massive pain to re-style. Especially on mobile. This is code I use in production on sites and in app, as it works in all modern browsers, *and* for touch on android and ios. <a href="http://codepen.io/fay-lisa/pen/QKqrvP/">See the whole CodePen</a></p>
					<div class="codepen-eg">
						<p data-height="470" data-theme-id="light" data-slug-hash="QKqrvP" data-default-tab="result" data-user="fay-lisa" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/fay-lisa/pen/QKqrvP/">CSS3 animated form fields</a> by fay-lisa (<a href="http://codepen.io/fay-lisa">@fay-lisa</a>) on <a href="http://codepen.io">CodePen</a>.</p>
					</div>
			</li>
		</ul>

		<hr>

		<h1>The holy grail layout with Flexbox</h1>
		<p>As long as there have been 3 column layouts, there has been the dilemma of how to structure them so each of the columns are equal height, no matter the content. Flex lets us do this, for browsers that support it. <a href="http://codepen.io/fay-lisa/pen/ZpGvzL/">See the Pen</a></p>

		<div class="codepen-eg">
			<p data-height="427" data-theme-id="light" data-slug-hash="ZpGvzL" data-default-tab="result" data-user="fay-lisa" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/fay-lisa/pen/ZpGvzL/">Flex-box 'holy grail' layout</a> by fay-lisa (<a href="http://codepen.io/fay-lisa">@fay-lisa</a>) on <a href="http://codepen.io">CodePen</a>.</p>
		</div>

		<hr>

		<h1>The holy grail layout old school style</h1>
		<p>If you need support down to IE8 (god forbid, but it happens more than you know. I'm looking at you, government computers), and still need a mobile-first, holy grail layout, this is the way to go. While new devs take this for granted, this was nigh IMPOSSIBLE until recently.</p>
		<p><a href="http://codepen.io/fay-lisa/pen/pEWWyE/" target="_blank">See this on CodePen</a></p>

		<div class="codepen-eg">
			<p data-height="427" data-theme-id="light" data-slug-hash="pEWWyE" data-default-tab="result" data-user="fay-lisa" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/fay-lisa/pen/pEWWyE/">CSS only 'holy grail' layout, no flex</a> by fay-lisa (<a href="http://codepen.io/fay-lisa">@fay-lisa</a>) on <a href="http://codepen.io">CodePen</a>.</p>
		</div>

			<script async src="//assets.codepen.io/assets/embed/ei.js"></script>



		<div class="center">
			<a class="scroll ps2id" href="#port-3">
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

			<!-- <a class="visit-button center" href="http://www.ink.faylisa.com">See the site</a> -->

		<div class="center">
			<a class="scroll ps2id" href="#port-4">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

    </div><!-- container -->
  </section>

	<section class="port-4" id="port-4">
		<div class="container port">
			<h2 class="center">Simple Design for Product</h2>

			<ul class="row">
				<li class="ten columns alpha">
					<img src="<?php echo get_template_directory_uri(); ?>/images/port/demo-1-half.jpg">
				</li>

				<li class="five columns omega sm-pad">
					<h1>Project</h1>

					<p>(In Development, branding obscured)<br>
					Requirement: Upcoming product needs open, simple design to make the product the focus. Not the design. </p>

					<hr class="grey">

					<h1>Role</h1>

					<p>
					<ul class="port-list">
						<li>Designer</li>
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
						<li>Wireframing</li>
						<li>Mobile-first framework code</li>
						<li>Integrating videos, articles and case study sections to support product</li>
					</ul>
				</li>
			</ul>


		<div class="center">
			<a class="scroll ps2id" href="#port-5">
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
				<a class="scroll ps2id" href="#top">
				<div class="arrow-up"></div></a>
			</div><!-- center -->
		<!-- <div class="center">
			<a class="scroll" href="#port-6">
			<div class="arrow-down"></div></a>
		</div><!-- center -->

		</div><!-- container -->
	</section>
<!--
		<section class="port-3" id="port-6">
		<div class="container port">
			<h2 class="center">Previous Projects</h2>
					<//?php
						$post_id = 166;
						$queried_post = get_post($post_id);
						$content = $queried_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);
						echo $content;
						?>

 		</div><!-- container -->
	<!-- </section> -->



<!-- get the sidebars and footer -->
<?php get_footer(); ?>
