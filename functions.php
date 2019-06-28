<?php
function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css?v=64' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;
	wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js' );

}

add_action( 'wp_enqueue_scripts', 'theme_js');

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
}

register_nav_menu('menu_cabecalho', 'Menu Principal');

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Página inicial',
		'id'            => 'inicio',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';

if ( function_exists( 'add_image_size' ) ) { 

add_image_size( 'cartaz', 360, 500, true );
add_image_size( 'foto_filme', 726, 385, true );
add_image_size( 'foto_noticia', 510, 475, true );
add_image_size( 'galeria', 631, 420, true );
add_image_size( 'foto_noticia_grande', 1024, 500, true );
add_image_size( 'foto_filme_grande', 922, 300, true );
add_image_size( 'foto-diretor', 300, 300, true );
}
add_filter( 'post_gallery', 'lucidity_bootstrap_gallery', 10, 2);
function lucidity_bootstrap_gallery( $output = '', $atts, $instance ) {
    if (strlen($atts['columns']) < 1) $columns = 3;
    else $columns = $atts['columns'];
    $images = explode(',', $atts['ids']);
    
    // Set the # of columns you would like
    if ( $columns < 1 || $columns > 12 ) $columns == 3;
    
    $col_class = 'col-lg-' . 12/$columns;
    
    $output = '<div class="row text-center text-lg-left gallery">';
    $i = 0;
    
    foreach ( $images as $key => $value ) {
       
        $image_attributes = wp_get_attachment_image_src( $value, 'thumbnail');
		$image_attributes_full = wp_get_attachment_image_src( $value, 'full');
        $output .= '
            <div class="'.$col_class.'">
              <a data-gallery="gallery" href="'.esc_url($image_attributes_full[0]).'" class="d-block mb-4 h-100">
                    <img src="'.esc_url($image_attributes[0]).'" alt="" class="img-fluid img-thumbnail">
                </a>
            </div>';
        $i++;
    }
    
    $output .= '</div>';
    
    return $output;
} 
?>