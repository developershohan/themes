<?php

// tp metabox 
add_filter( 'tp_meta_boxes', 'themepure_metabox' );

function themepure_metabox( $meta_boxes ) {
	
	$prefix     = 'finbest';
	
	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_page_meta_box',
		'title'    => esc_html__( 'TP Page Info', 'finbest' ),
		'post_type'=> 'page',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Show Breadcrumb?', 'finbest' ), 
				'id'      => "{$prefix}_check_bredcrumb",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),		
			array(
				'label'    => esc_html__( 'Show Breadcrumb Image?', 'finbest' ),
				'id'      => "{$prefix}_check_bredcrumb_img",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			), 

            array(
				'label'    => esc_html__( 'Enable Secondary Logo', 'finbest' ),
				'id'      => "{$prefix}_en_secondary_logo",
				'type'    => 'switch',
				'default' => 'off',
				'conditional' => array()
			), 

            array(
				
				'label'    => esc_html__( 'Breadcrumb Background', 'finbest' ),
				'id'      => "{$prefix}_breadcrumb_bg",
				'type'    => 'image',
				'default' => '',
				'conditional' => array(
					"{$prefix}_check_bredcrumb_img", "==", "on"
				)
			),

            array(
				
				'label'    => esc_html__( 'Footer BG', 'finbest' ),
				'id'      => "{$prefix}_footer_bg_image",
				'type'    => 'image',
				'default' => '',
				'conditional' => array()
			),


			array(
				'label' => 'Colorpicker',
				'id'   	=> "{$prefix}_footer_bg_color",
				'type' 	=> 'colorpicker',
				'placeholder' => '',
				'default' 	  => '',
				'conditional' => array()
			),


    

            // multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__( 'Header', 'finbest' ),
				'id'      => "{$prefix}_header_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__( 'Default', 'finbest' ),
					'custom' => esc_html__( 'Custom', 'finbest' ),
				),
				'default' => 'default',
				'conditional' => array()
			), 

            // select field dropdown 
			array(
				
				'label'           => esc_html__('Select Header Style', 'finbest'),
				'id'              => "{$prefix}_header_style",
				'type'            => 'select',
				'options'         => array(
					'header_1' => esc_html__( 'Header 1', 'finbest' ),
					'header_2' => esc_html__( 'Header 2', 'finbest' ),
					'header_3' => esc_html__( 'Header 3', 'finbest' ),
					'header_1_onepage' => esc_html__( 'Header 01 OnePage', 'finbest' ),
					'header_2_onepage' => esc_html__( 'Header 02 OnePage', 'finbest' ),
					'header_3_onepage' => esc_html__( 'Header 03 OnePage', 'finbest' ),
				),
				'placeholder'     => esc_html__( 'Select a header', 'finbest' ),
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "custom"
				),
				'default' => 'header_1',
				'parent' => "{$prefix}_header_tabs",
				'context'  => 'normal' 
			),

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Header Template', 'finbest'),
				'id'              => "{$prefix}_header_templates",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__( 'Select a template', 'finbest' ),
                'post_type'       => 'tp-header',
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "elementor"
				),
				'default' => '',
			),


            // multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__( 'Footer', 'finbest' ),
				'id'      => "{$prefix}_footer_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__( 'Default', 'finbest' ),
					'custom' => esc_html__( 'Custom', 'finbest' ),
				),
				'default' => 'default',
				'conditional' => array()
			), 

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Footer Style', 'finbest'),
				'id'              => "{$prefix}_footer_style",
				'type'            => 'select',
				'options'         => array(
					'footer_1' => esc_html__( 'Footer 1', 'finbest' ),
					'footer_2' => esc_html__( 'Footer 2', 'finbest' ),
					'footer_3' => esc_html__( 'Footer 3', 'finbest' ),
				),
				'placeholder'     => esc_html__( 'Select a footer', 'finbest' ),
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "custom"
				),
				'default' => 'footer_1',
				'parent' => "{$prefix}_footer_tabs"
			),

            // select field dropdown
			array(
				
				'label'           => esc_html__('Select Footer Template', 'finbest'),
				'id'              => "{$prefix}_footer_template",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__( 'Select a template', 'finbest' ),
                'post_type'       => 'tp-footer',
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "elementor"
				),
				'default' => '',
			),
		),
	);

    $meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_gallery_meta',
		'title'    => esc_html__( 'TP Gallery Post', 'finbest' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
            array(
				'label'    => esc_html__( 'Gallery', '' ),
				'id'      => "{$prefix}_post_gallery",
				'type'    => 'gallery',
				'default' => '',
				'conditional' => array(),
			),
		),
		'post_format' => 'gallery'
	);    

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_video_meta',
		'title'    => esc_html__( 'TP Video Post', 'finbest' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Video', 'finbest' ),
				'id'      => "{$prefix}_post_video",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__( 'Place your video url.', 'finbest' ),
			),
		),
		'post_format' => 'video'
	);	

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_audio_meta',
		'title'    => esc_html__( 'TP Audio Post', 'finbest' ),
		'post_type'=> 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array( 
			array(
				'label'    => esc_html__( 'Audio', 'finbest' ),
				'id'      => "{$prefix}_post_audio",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__( 'Place your audio url..', 'finbest' ),
			),
		),
		'post_format' => 'audio'
	);
	return $meta_boxes;
}