<?php
// Registra as sidebars
function tutsup_sidebars()	{
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Widgets da sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="sidebar-widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Rodapé',
		'id'            => 'footer-1',
		'description'   => 'Widgets do rodapé.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'tutsup_sidebars' );


// Registra os menus
function register_my_menu() {
    register_nav_menu('menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Adiciona thumbanail no post
add_theme_support( 'post-thumbnails' ); 

