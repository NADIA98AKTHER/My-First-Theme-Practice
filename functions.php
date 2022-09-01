<?php 
register_nav_menus( 
    array('Primary-Menu'=>'Top Menu')
   
) ;
register_nav_menus( 
   
   
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
register_sidebar(
    array(
        'name' => "Widget Location",
        'id'=> 'widget'
    )
    );
add_theme_support('custom-background')
?>

<?php 
register_sidebar(
    array(
        'name' =>"footer1",
        'id'=> 'footer1',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer2",
        'id'=> 'footer2',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer3",
        'id'=> 'footer3',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer4",
        'id'=> 'footer4',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer7",
        'id'=> 'footer7',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer5",
        'id'=> 'footer5',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>
<?php 
register_sidebar(
    array(
        'name' =>"footer6",
        'id'=> 'footer6',
        'description' =>_('Appears in the footer',)
    )
    );
add_theme_support('custom-background')
?>

