<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?> <?php if (is_front_page()){echo
         " | "; bloginfo('description'); } ?></title>
   
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS only -->

</head>
<body <?php body_class(); ?>>


    <!--------Header----->


  <!--------Menu----->
  
<div id="Frame_1"class="<?php echo get_theme_mod('menu_position');?>" >

        
   
        
        
   

    <!--------Logo----->
    <div class="Container">
        <div class="row1">

           <div class="col-md-3" >
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}?>
            </div>
            <div class="col-md-9" class="<?php echo get_theme_mod('n_header_color');?>">
            <?php wp_nav_menu (array('theme_location' =>'Primary-Menu','menu_class' =>'nav'))?>
          </div>
        </div>

    </div>
</div>

 
