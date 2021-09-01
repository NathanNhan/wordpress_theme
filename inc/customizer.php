<?php 

 function wpb_customize_register($wp_customize){
         //showcase section
         $wp_customize->add_section('showcase', array(
             'title' => __('Showcase', 'wp_bootstrap'),
             'description' => sprintf(__('Options for showcase','wp_bootstrap')),
             'priority' => 130
         ));
        //image
        $wp_customize->add_setting('showcase_image', array(
            'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image',array(
            'label'      => __( 'Showcase image', 'wp_
                    bootstrap' ),
            'section'    => 'showcase',
            'settings' => 'showcase_image',
            'priority'   => 1,
        )));

         $wp_customize->add_setting('showcase_heading',array(
             'default' => _x('Custom Bootstrap Wordpress Theme','wp_bootstrap'),
             'type' => 'theme_mod'
         ));
         $wp_customize->add_control('showcase_heading',array(
             'label'      => __( 'Heading', 'wp_
             bootstrap' ),
            'section'    => 'showcase',
            'priority'   => 2,
         ));
         //showcase text
        $wp_customize->add_setting('showcase_text', array(
            'default' => _x('Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam', 'wp_bootstrap'),
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wp_
                bootstrap'),
        'section' => 'showcase',
        'priority' => 3,
        ));
        //button url
        $wp_customize->add_setting('btn_url', array(
            'default' => _x('http://text.com', 'wp_bootstrap'),
            'type' => 'theme_mod',
        ));
                $wp_customize->add_control('btn_url', array(
            'label' => __('Button Url', 'wp_
                        bootstrap'),
            'section' => 'showcase',
            'priority' => 4,
        ));

   //button text
        $wp_customize->add_setting('btn_text', array(
            'default' => _x('Read More', 'wp_bootstrap'),
            'type' => 'theme_mod',
        ));
        $wp_customize->add_control('btn_text', array(
            'label' => __('Button Text', 'wp_
                        bootstrap'),
            'section' => 'showcase',
            'priority' => 5,
        ));
    //color section 
   





 }

 add_action('customize_register', 'wpb_customize_register');