<?php

add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true ); //Put more thumbnail sizes. Refer to article by Mark Jacquith

add_theme_support('woocommerce'); // Add WooCommerce Support

/**
 * Registers two widget areas.
 */
function jitendrak_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'jitendrak' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'jitendrak' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'jitendrak' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'jitendrak' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'jitendrak_widgets_init' );

// Find all images and add img-responsive class
//----------------------------------------------------------/
//  responsive images [ 1) add img-responsive class 2) remove dimensions ]
//----------------------------------------------------------/

function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive hidden-print'; // separated by spaces, e.g. 'img image-link'

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );

// Add Google code prettifier classes in <pre> tags

function bootstrap_code_prettifier( $html ){
  $classes = 'pre-scrollable prettyprint linenums';

  // check if there are already classes assigned to the anchor
  if ( preg_match('/<pre.*? class="/', $html) ) {
    $html = preg_replace('/(<pre.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<pre.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  return $html;
}
add_filter( 'the_content','bootstrap_code_prettifier');

// Add a theme upgrade notifier





/**
* Apply theme's stylesheet to the visual editor.
*
* @uses add_editor_style() Links a stylesheet to visual editor
* @uses get_stylesheet_uri() Returns URI of theme stylesheet
*/
add_action( 'init', 'cd_add_editor_styles' );

function cd_add_editor_styles() {

add_editor_style( get_stylesheet_uri() );

}

// Link Twitter user names
function twtreplace($content) {
	$twtreplace = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);
	return $twtreplace;
}

add_filter('the_content', 'twtreplace');
add_filter('comment_text', 'twtreplace');

//Show a total share counter (FB, Twitter, G+)

function social_shares() {
    $url = get_permalink( $post_id );
    $json = file_get_contents("http://api.sharedcount.com/?url=" . rawurlencode($url));
    $counts = json_decode($json, true);
    $totalcounts = $counts["Twitter"] +
$counts["Facebook"]["total_count"] +
$counts["GooglePlusOne"];
    echo "&lt;div&gt;$totalcounts Share&lt;/div&gt;";
}


//Add extra contact methods to user profiles
function my_user_contactmethods($user_contactmethods){
  $user_contactmethods['twitter'] = 'Twitter Username';
  $user_contactmethods['facebook'] = 'Facebook Username';

  return $user_contactmethods;
}
add_filter('user_contactmethods', 'my_user_contactmethods');

//Enqueue Stylesheet and JS
function jitendrak_enqueue_style() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css',false,'1.0','all');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.0','all');
}

function jitendrak_enqueue_script() {
  wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/bootstrap.js');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom-script.js');
}

add_action( 'wp_enqueue_scripts', 'jitendrak_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'jitendrak_enqueue_script' );