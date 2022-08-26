<?php 
register_nav_menus( 
    array('Primary-Menu'=>'Top Menu')
   
) ;


function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//Featured images & Post thumbnails//
	
add_theme_support( 'post-thumbnails' );


?>
<?php 
function mytheme_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


?>
<?php 
add_filter('pre_get_posts', 'limit_archive_posts');
function limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 2);
    }
    return $query;
}
?>
<?php if ( have_posts() ) : ?>
   
   <!-- Start of the main loop. -->
   <?php while ( have_posts() ) : the_post(); ?>
     
       <?php the_content(); ?>
         
    <?php wp_link_pages(); ?> 
      
   <?php endwhile; ?>
 
<?php endif; ?>
