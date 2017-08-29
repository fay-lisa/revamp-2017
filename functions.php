<?php
 
	/* HOOK SETUP */

	// custom menus
	add_action( 'init', 'ag_register_primary_menu' );
	add_action( 'init', 'ag_register_footer_menu' );
	

	
	// filters
	/* to allow for the excerpt to be truncated within the php to a set number of words*/
		function excerpt($limit) {
		  $excerpt = explode(' ', get_the_excerpt(), $limit);
		  if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		  } else {
			$excerpt = implode(" ",$excerpt);
		  }	
		  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);

		  return $excerpt;
		  

			
}
	/* CUSTOM FUNCTIONS */
	
	if ( function_exists('register_sidebar') )
	{
                             register_sidebar(array(
			'name' => 'Top Line Elements',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h6 class="hidden">',
			'after_title' => '</h6>'
		));
		register_sidebar(array(
			'name' => 'Footer Widgets',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h6>',
			'after_title' => '</h6>'
		));
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s bloo margin-b20 "><div class="pad-all3">',
			'after_widget' => '</div></div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>'
		));
                

	}
	
	function ag_register_primary_menu() 
	{
		register_nav_menu( 'ag-primary-menu', __( 'Primary Menu' ) );
	}
	function ag_register_footer_menu() 
	{
		register_nav_menu( 'ag-footer-menu', __( 'Footer Menu' ) );
	}
	
	/* THEME SUPPORT OPTIONS */
	
	// thumbnails
	//add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size(960, 450, true);
        
        if ( function_exists( 'add_theme_support' ) ) { 
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 9999, 300); // default Post Thumbnail dimensions (cropped)

        // additional image sizes
        // delete the next line if you do not need additional image sizes
        add_image_size( 'banner-size', 9999, 300 ); //300 pixels wide (and unlimited height)
        }
	
	// extra post formats - restricted to gallery and video for now, and allowed for pages
	add_theme_support( 'post-formats', array( 'video', 'gallery' ) );
	add_post_type_support( 'page', 'post-formats' );
	
	// adds the ability for portfolio posts to be split into two, via shortcodes
	function half_shortcode( $atts, $content = null ) {
	return '<div class="eight columns alpha">' . do_shortcode($content) . '';
}
add_shortcode( 'half', 'half_shortcode' );

	function narrow_shortcode( $atts, $content = null ) {
	return '<div class="five columns">' . $content . '</div>';
}
add_shortcode( 'narrow', 'narrow_shortcode' );


?>