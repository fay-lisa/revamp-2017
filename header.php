<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<!-- Optimized mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- page title -->
<title><?php wp_title ( '|', true,'right' ); ?><?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!-- stylesheets -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- google font call -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Oranienbaum' rel='stylesheet' type='text/css'>

<!-- Minimized jQuery from Google CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
       jQuery(document).ready(function($){

          /* prepend menu icon */
          $('.top-nav').prepend('<div class="menu-icon">Menu</div>');

          /* toggle nav */
          $(".menu-icon").on("click", function(){
                  $("#ag-primary-menu").slideToggle();
                  $(this).toggleClass("active");

          });
    });
</script>

<!-- Polyfill. just in case -->
<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>

	<?php
		// support multi-threaded comments
		if ( is_singular() && get_option( 'thread_comments' ) )
		{
			wp_enqueue_script( 'comment-reply' );
		}

		//add the necessary WordPress startup
		wp_head();
		wp_get_archives('type=monthly&format=link');
	?>

  <!-- Hotjar Tracking Code for faylisa.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:62348,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>


<!-- add the auto-generated WP body classes for easier CSS styling of individual site sections -->
<body>

  <header>
    <div class="top-nav">
      <a class="logo" href="<?php echo get_option('home'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="faylisa.com: web designer, css poet">
      </a>
			<nav>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'hor-nav', 'container_id' => 'ag-primary-menu', 'theme_location' => 'ag-primary-menu' ) ); ?>
			</nav><!-- nav -->
    </div>
	</header><!-- header -->


  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' );
  $image = $image[0]; ?>

	<?php if ( is_front_page () ) : ?>

		<div class="container">
			<div class="banner-home" style="background-image: url('<?php echo $image; ?>')" >		</div><!-- banner -->
			<hr class="no-m-t">
		</div><!-- container -->

	<?php elseif ( is_page() ) : ?>

		<div class="container">
			<div class="banner" style="background-image: url('<?php echo $image; ?>')" >
				<h1><?php the_title(); ?></h1>
			</div><!-- banner -->
		</div><!-- container -->
		<hr class="no-m-t sub-titles">

    <?php endif; ?>
    <?php else :?>
    <?php endif; ?>

	<!--[if lt IE 9]>
	<p class="page-warning">This page may not function properly because you are using an <strong>OUTDATED</strong> browser. You may <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience, not just on this site, but on every site. And for security purposes. Also, it's free. No reason not to update.</p>
	<![endif]-->
