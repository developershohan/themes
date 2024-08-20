<?php 

// myblogger_menu
function myblogger_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'main-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Myblogger_Walker_Nav_Menu::fallback',
            'walker'     => new Myblogger_Walker_Nav_Menu,
        ) 
    ); 
}

// myblogger_side_panel_menu
function myblogger_side_panel_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'side-panel-menu',
            'menu_class'      => '',
            'menu_id'         => '',
            'fallback_cb'     => 'Myblogger_Walker_Nav_Menu::fallback',
            'walker'     => new Myblogger_Walker_Nav_Menu,
        ) 
    ); 
}


