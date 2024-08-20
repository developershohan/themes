<?php 

// techub_menu
function myblogger_menu(){
    wp_nav_menu( 
        array( 
            'theme_location'  => 'main-menu',
            'menu_class'      => 'test-class',
            'menu_id'         => 'test-id',
            'fallback_cb'     => 'Myblogger_Walker_Nav_Menu::fallback',
            'walker'     => new Myblogger_Walker_Nav_Menu,
        ) 
    ); 
}


