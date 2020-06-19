<?php
// povezivanje asset-a
function assets_povezivanje() {
  // povezivanje style.css-a sa temom
  wp_register_style('style', get_stylesheet_uri('style.css', __FILE__));
  wp_enqueue_style('style');
  // povezivanje media.css-a sa temom
  wp_register_style('media', get_stylesheet_uri('media.css', __FILE__));
  wp_enqueue_style('media');
  // povezivanje jquery-a sa temom
  wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.js', array(), null, true);
  // povezivanje main.js-a sa temom
  wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'assets_povezivanje' );

// registrovanje custom post type-a
function recipes_cpu() {
    register_post_type('recipes',
        array(
            'labels'      => array(
                'name'          => __('Recipes', 'textdomain'),
                'singular_name' => __('Recipe', 'textdomain'),
            ),
                'public'      => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-buddicons-community',
        )
    );
}
add_action('init', 'recipes_cpu');

// dodavanje featured image na post sqlite_fetch_column_types
add_theme_support('post-thumbnails');
add_post_type_support( 'recipes', 'thumbnail' );

?>
