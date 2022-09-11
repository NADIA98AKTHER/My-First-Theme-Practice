<?php 
register_nav_menus( 
    array('Primary-Menu'=>'Top Menu')
   
) ;
register_nav_menus( 
   
   
) ;

function theme_styles(){ 
    // Load all of the styles that need to appear on all pages
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' ); 
    }
     add_action('wp_enqueue_scripts', 'theme_styles');


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

 
register_sidebar(
    array(
        'name' =>"footer1",
        'id'=> 'footer1',
        'description' =>_('Appears in the footer',)
    )
    );

register_sidebar(
    array(
        'name' =>"footer2",
        'id'=> 'footer2',
        'description' =>_('Appears in the footer',)
    )
    );

register_sidebar(
    array(
        'name' =>"footer3",
        'id'=> 'footer3',
        'description' =>_('Appears in the footer',)
    )
    );

register_sidebar(
    array(
        'name' =>"footer4",
        'id'=> 'footer4',
        'description' =>_('Appears in the footer',)
    )
    );

register_sidebar(
    array(
        'name' =>"footer7",
        'id'=> 'footer7',
        'description' =>_('Appears in the footer',)
    )
    );


register_sidebar(
    array(
        'name' =>"footer5",
        'id'=> 'footer5',
        'description' =>_('Appears in the footer',)
    )
    );


register_sidebar(
    array(
        'name' =>"footer6",
        'id'=> 'footer6',
        'description' =>_('Appears in the footer',)
    )
    );


register_sidebar(
    array(
        'name' =>"blog_conten1",
        'id'=> 'blog_content1',
        'description' =>_('Appears in the sidebar',)
    )
    );

 
register_sidebar(
    array(
        'name' =>"home_conten1",
        'id'=> 'home_content1',
        'description' =>_('Appears in the sidebar',)
    )
    );


register_sidebar(
    array(
        'name' =>"Featured At",
        'id'=> 'Featured At',
        'description' =>_('Appears in the sidebar',)
    )
    );

register_sidebar(
        array(
            'name' =>"Featured plugin",
            'id'=> 'Featured plugin',
            'description' =>_('Appears in the sidebar',)
        )
        );
 register_sidebar(
            array(
                'name' =>"home_conten1_image",
                'id'=> 'home_content1_image',
                'description' =>_('Appears in the sidebar',)
            )
    );

register_sidebar(
    array(
        'name' =>"Phone",
        'id'=>'Phone',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Heading",
        'id'=>'Heading',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Add",
        'id'=>'Add',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list1",
        'id'=>'Addon_list1',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list2",
        'id'=>'Addon_list2',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list3",
        'id'=>'Addon_list3',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list4",
        'id'=>'Addon_list4',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list5",
        'id'=>'Addon_list5',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"Addon_list6",
        'id'=>'Addon_list6',
        'description' =>_('Appears in the sidebar',)
    )
);
register_sidebar(
    array(
        'name' =>"social",
        'id'=>'social',
        'description' =>_('Appears in the sidebar',)
    )
); 
register_sidebar(
    array(
        'name' =>"pricing",
        'id'=>'pricing',
        'description' =>_('Appears in the sidebar',)
    )
);  
?>
<?php 
//color option
function mytheme_customize_register($wp_customize){
    
      //Menu position option

      $wp_customize->add_section('menu_option',array(
    
        'title' =>__( 'Menu Position', 'nadiaakther'),
        'description' =>__( 'You Can Change Your Menu Position'),
       
    ));
    $wp_customize->add_setting('menu_position',array(
        'default'   => 'right_menu',
      
      ) );
      $wp_customize->add_control('menu_position', array(
        'section' => 'menu_option',
        'label'   =>  'Menu Position',
        'setting' => 'menu_position',
        'description' =>( 'Select Your Menu Position'),
        'type' => 'radio',
        'choices'=> array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'centre_menu' => 'Centre Menu',
        )
      ) ) ;
    
    //Theme Color

        }
         add_action( 'customize_register', 'mytheme_customize_register' );

        ?>







<?php
function mytheme_customize_register2( $wp_customize ) {
//H2 color
    $wp_customize->add_section( 'new1' , array(
        'title'      => __( 'Color', 'mytheme' ),
        
    ) );
    $wp_customize->add_setting( 'h2_color' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_color', array(
        'label'      => __( 'H2 Color', 'mytheme' ),
        'section'    => 'new1',
        'settings'   => 'h2_color',
    ) ) );

    //h1 color
    $wp_customize->add_setting( 'h1_color' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_color', array(
        'label'      => __( 'H1 Color', 'mytheme' ),
        'section'    => 'new1',
        'settings'   => 'h1_color',
    ) ) );


    //Background color

    $wp_customize->add_setting('bg_color', array(
        'default'  => '#ffffff',
      
      ) );
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'bg_color', array( 
        'section' => 'new1',
        'label'   =>  'Background Color',
        'setting' => 'bg_color',
      )));



      //Menu Color
    
      $wp_customize->add_setting('menu_color', array(
        'default'  => 'rgba(0, 0, 0, 0.6)',
      
      ) );
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'menu_color', array( 
        'section' => 'new1',
        'label'   =>  'Menu Color',
        'setting' => 'menu_color',
      )));



      //Menu Hover Color
      $wp_customize->add_setting('menu_hover_color', array(
        'default'  => '#ff4500',
      
      ) );
      $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'menu_hover_color', array( 
        'section' => 'new1',
        'label'   =>  'Menu Hover Color',
        'setting' => 'menu_color',
      )));


 }
 add_action( 'customize_register', 'mytheme_customize_register2' );
 function mytheme_customize_css()
 {
     ?>
          <style type="text/css">
              h2 { color: <?php echo get_theme_mod('h2_color', '#000000'); ?>; }
              h1 { color: <?php echo get_theme_mod('h1_color', '#000000'); ?>; }
              body{background: <?php echo get_theme_mod('bg_color', '#000000'); ?>; } 
              ul li a{ color: <?php echo get_theme_mod('menu_color', '#000000'); ?>; }
              ul li a:hover{ color: <?php echo get_theme_mod('menu_hover_color', '#000000'); ?>; }
          </style>
     <?php
 }
 add_action( 'wp_head', 'mytheme_customize_css');
?>
