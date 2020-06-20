<?php
// povezivanje asset-a
function assets_povezivanje() {
  // povezivanje style.css-a sa temom
  wp_register_style('style', get_stylesheet_uri('style.css', __FILE__));
  wp_enqueue_style('style');
  // povezivanje jquery-a sa temom
  wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.js', array(), null, true);
  // povezivanje main.js-a sa temom
  wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'assets_povezivanje' );


function recipes_cpt() {
// registrovanje custom post type-a
    $post_labels = array(
      'name' => _x( 'Recipes', 'taxonomy general name' ),
      'singular_name' => _x( 'Recipe', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Recipe' ),
      'all_items' => __( 'All Recipes' ),
      'parent_item' => __( 'Parent Recipe' ),
      'parent_item_colon' => __( 'Parent Recipe:' ),
      'edit_item' => __( 'Edit Recipe' ),
      'update_item' => __( 'Update Recipe' ),
      'add_new_item' => __( 'Add New Recipe' ),
      'new_item_name' => __( 'New Recipe Name' ),
      'menu_name' => __( 'Recipes' ),
    );
    register_post_type(
      'recipes',
        array(
            'labels'      => $post_labels,
            'public'      => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-buddicons-community',
            'rewrite' => array( 'slug' => 'recipes/%type%', 'with_front' => false ),
        )
    );
// registrovanje custom taxonomy-ja za cpt
    $taxonomy_labels = array(
      'name' => _x( 'Types', 'taxonomy general name' ),
      'singular_name' => _x( 'Type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Type' ),
      'all_items' => __( 'All Types' ),
      'parent_item' => __( 'Parent Type' ),
      'parent_item_colon' => __( 'Parent Type:' ),
      'edit_item' => __( 'Edit Type' ),
      'update_item' => __( 'Update Type' ),
      'add_new_item' => __( 'Add New Type' ),
      'new_item_name' => __( 'New Type Name' ),
      'menu_name' => __( 'Types' ),
    );
    register_taxonomy(
        'type',
        'recipes',
        array(
          'labels' => $taxonomy_labels,
          'rewrite' => array( 'slug' => 'recipes', 'with_front' => false ),
        )
    );
}
add_action('init', 'recipes_cpt');

// kreiranje permalinka za custom post taxonomy
function wpa_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'recipes' ){
        $terms = wp_get_object_terms( $post->ID, 'type' );
        if( $terms ){
            return str_replace( '%type%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );

// dodavanje featured image na post sqlite_fetch_column_types
add_theme_support('post-thumbnails');
add_post_type_support( 'recipes', 'thumbnail' );

?>
