<?php
/**
  * Add panel | custom section and settings
  */
  function firstest_news_theme_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'to_header_panel',
        array(
            'title'      => esc_html__( 'Header', 'wp-firstest-news-theme' ),
            'priority'   => 20,
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_section( 'social_option_section_settings',
        array(
            'title'      => esc_html__( 'Social Profile Options', 'wp_firstest_news_theme' ),
            'priority'   => 120,
            'capability' => 'edit_theme_options',
            'panel'      => 'to_header_panel', //Refence to panel above
        )
    );

            /*Social Profile*/
            $wp_customize->add_setting( 'social_profile',
                array(
                    'default'           => 123,
                    'capability'        => 'edit_theme_options'
                    // 'sanitize_callback' => 'wp_firstest_news_theme_sanitize_checkbox',
                )
            );
            $wp_customize->add_control( 'social_profile',
                array(
                    'label'    => esc_html__( 'Global Social Profile ( Nav Right )', 'wp-firstest-news-theme' ),
                    'section'  => 'social_option_section_settings',
                    'type'     => 'checkbox',

                )
            );

    // Global section start **************************
   $wp_customize->add_section('theme-option', array(
     'title' => __('Edit Carousel', 'wp-firstest-news-theme'),
     'description' => sprintf(__('Options for showcase', 'wp-firstest-news-theme')),
     'priority' => 130,
     'capability' => 'edit_theme_options',
     'panel'      => 'to_header_panel' 
   ));

   // Add image slider
   $wp_customize->add_setting('header_logo', array(
     'default'  => false,
     'type'     => 'theme_mod'
   ));

   // Add control
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
     'label'    =>esc_html( __('Logo', 'wp-firstest-news-theme')),
     'section'  => 'theme-option',
     'setting' => 'header_logo',
     'priority' => 1
   )));

   // Add settings slider 1 heading
   $wp_customize->add_setting('footer_copyright', array(
     'default'  => 'Copyright © 2021 PropertyGuru Ltd. All rights reserved',
     'type'     => 'theme_mod'
   ));

   // Add control
   $wp_customize->add_control('footer_copyright', array(
     'label'    => esc_html(__('Copyright', 'wp-firstest-news-theme')),
     'section'  => 'theme-option',
     'priority' => 2
   ));
}
 add_action( 'customize_register', 'firstest_news_theme_customize_register' );
