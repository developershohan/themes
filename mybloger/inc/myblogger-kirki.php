<?php 

new \Kirki\Panel(
	'myblogger_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'My Bloger Options', 'myblogger' ),
		'description' => esc_html__( 'My Panel Description.', 'myblogger' ),
	]
);

// header Info
function myblogger_header_info() {
    new \Kirki\Section(
        'myblogger_header_info',
        [
            'title'       => esc_html__( 'Top bar', 'myblogger' ),
            'description' => esc_html__( 'My Section Description.', 'myblogger' ),
            'panel'       => 'myblogger_panel',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'myblogger_email',
            'label'    => esc_html__( 'Email', 'myblogger' ),
            'section'  => 'myblogger_header_info',
            'default'  => esc_html__( 'info@example.com', 'myblogger' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'myblogger_phone',
            'label'    => esc_html__( 'Phone', 'myblogger' ),
            'section'  => 'myblogger_header_info',
            'default'  => esc_html__( '+964 742 44 763', 'myblogger' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Textarea(
        [
            'settings'    => 'myblogger_time',
            'label'       => esc_html__( 'Time', 'myblogger' ),
            'section'     => 'myblogger_header_info',
            'default'     => esc_html__( 'Sunday-Thures 10am-07pm', 'myblogger' ),
        ]
    );
    
    
    
    
    
}

myblogger_header_info();

// header logo
function myblogger_header_logo() {
    new \Kirki\Section(
        'myblogger_header_logo',
        [
            'title'       => esc_html__( 'Logo', 'myblogger' ),
            'description' => esc_html__( 'My Section Description.', 'myblogger' ),
            'panel'       => 'myblogger_panel',
            'priority'    => 160,
        ]
    );
    
    new \Kirki\Field\Image(
        [
            'settings' => 'myblogger_logo',
            'label'    => esc_html__( 'Logo', 'myblogger' ),
            'section'  => 'myblogger_header_logo',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo-black.svg' ,
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings' => 'myblogger_search_logo',
            'label'    => esc_html__( 'Search Logo', 'myblogger' ),
            'section'  => 'myblogger_header_logo',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo.svg' ,
            'priority' => 10,
        ]
    );
    
    
    
    
    
}


myblogger_header_logo();
// header logo

function myblogger_side_panel() {
    new \Kirki\Section(
        'myblogger_side_panel',
        [
            'title'       => esc_html__( 'Side Panel', 'myblogger' ),
            'description' => esc_html__( 'My Section Description.', 'myblogger' ),
            'panel'       => 'myblogger_panel',
            'priority'    => 160,
        ]
    );
    

    new \Kirki\Field\Image(
        [
            'settings' => 'myblogger_side_panel_logo',
            'label'    => esc_html__( 'side panel  Logo', 'myblogger' ),
            'section'  => 'myblogger_side_panel',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo-black.svg' ,
            'priority' => 10,
        ]
    );
    
}


myblogger_side_panel()


?>