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
    $wp_customize->add_section('header_area',array(
    
        'title' =>__( 'Header' ),
        'description' =>__( 'Add color'),
       
    ));
    $wp_customize->add_setting('n_header_color',array(
        'default'   => '',
        'transport' => 'refresh',
      ) );
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'n_header_color', array(
        'section' => 'header_area',
        'label'   =>  'header color',
        'setting' => 'n_header_color',
      ) ) );



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
  
}
add_action('customize_register', 'mytheme_customize_register');
?>
