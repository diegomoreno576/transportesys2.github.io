<?php
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 

add_theme_support( 'post-thumbnails' );

function init_template(){

    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

}
add_action('init', 'init_template');

 


// Register Custom Post Type
if ( ! function_exists('banner') ) {

    // Register Custom Post Type
    function banner() {
    
        $labels = array(
            'name'                  => _x( 'banners', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Post Types', 'text_domain' ),
            'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'banner', 'text_domain' ),
            'description'           => __( 'banner de trasnsporte', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-home',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'banner', $args );
    
    }
    add_action( 'init', 'banner', 0 );
    
    }

    if ( ! function_exists('conductores') ) {

        // Register Custom Post Type
        function conductores() {
        
            $labels = array(
                'name'                  => _x( 'conductores', 'Post Type General Name', 'text_domain' ),
                'singular_name'         => _x( 'conductor', 'Post Type Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Post Types', 'text_domain' ),
                'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
                'archives'              => __( 'Item Archives', 'text_domain' ),
                'attributes'            => __( 'Item Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All Items', 'text_domain' ),
                'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Item', 'text_domain' ),
                'edit_item'             => __( 'Edit Item', 'text_domain' ),
                'update_item'           => __( 'Update Item', 'text_domain' ),
                'view_item'             => __( 'View Item', 'text_domain' ),
                'view_items'            => __( 'View Items', 'text_domain' ),
                'search_items'          => __( 'Search Item', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( 'Items list', 'text_domain' ),
                'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            );
            $args = array(
                'label'                 => __( 'conductores', 'text_domain' ),
                'description'           => __( 'vista de conductores', 'text_domain' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                'taxonomies'            => array( 'category', 'post_tag' ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'menu_icon'             => 'dashicons-admin-users',
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'capability_type'       => 'page',
            );
            register_post_type( 'conductores', $args );
        
        }
        add_action( 'init', 'conductores', 0 );
        
        }

        if ( ! function_exists('vehiculos') ) {

            // Register Custom Post Type
            function vehiculos() {
            
                $labels = array(
                    'name'                  => _x( 'vehiculos', 'Post Type General Name', 'text_domain' ),
                    'singular_name'         => _x( 'vehiculo', 'Post Type Singular Name', 'text_domain' ),
                    'menu_name'             => __( 'Post Types', 'text_domain' ),
                    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
                    'archives'              => __( 'Item Archives', 'text_domain' ),
                    'attributes'            => __( 'Item Attributes', 'text_domain' ),
                    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                    'all_items'             => __( 'All Items', 'text_domain' ),
                    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                    'add_new'               => __( 'Add New', 'text_domain' ),
                    'new_item'              => __( 'New Item', 'text_domain' ),
                    'edit_item'             => __( 'Edit Item', 'text_domain' ),
                    'update_item'           => __( 'Update Item', 'text_domain' ),
                    'view_item'             => __( 'View Item', 'text_domain' ),
                    'view_items'            => __( 'View Items', 'text_domain' ),
                    'search_items'          => __( 'Search Item', 'text_domain' ),
                    'not_found'             => __( 'Not found', 'text_domain' ),
                    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                    'featured_image'        => __( 'Featured Image', 'text_domain' ),
                    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                    'items_list'            => __( 'Items list', 'text_domain' ),
                    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                );
                $args = array(
                    'label'                 => __( 'vehiculos', 'text_domain' ),
                    'description'           => __( 'vista de vehiculos', 'text_domain' ),
                    'labels'                => $labels,
                    'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                    'taxonomies'            => array( 'category', 'post_tag' ),
                    'hierarchical'          => false,
                    'public'                => true,
                    'show_ui'               => true,
                    'show_in_menu'          => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-location-alt',
                    'show_in_admin_bar'     => true,
                    'show_in_nav_menus'     => true,
                    'can_export'            => true,
                    'has_archive'           => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'capability_type'       => 'page',
                );
                register_post_type( 'vehiculos', $args );
            
            }
            add_action( 'init', 'vehiculos', 0 );
            
            }
            if ( ! function_exists('servicios') ) {

                // Register Custom Post Type
                function servicios() {
                
                    $labels = array(
                        'name'                  => _x( 'servicios', 'Post Type General Name', 'text_domain' ),
                        'singular_name'         => _x( 'servicio', 'Post Type Singular Name', 'text_domain' ),
                        'menu_name'             => __( 'Post Types', 'text_domain' ),
                        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
                        'archives'              => __( 'Item Archives', 'text_domain' ),
                        'attributes'            => __( 'Item Attributes', 'text_domain' ),
                        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                        'all_items'             => __( 'All Items', 'text_domain' ),
                        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                        'add_new'               => __( 'Add New', 'text_domain' ),
                        'new_item'              => __( 'New Item', 'text_domain' ),
                        'edit_item'             => __( 'Edit Item', 'text_domain' ),
                        'update_item'           => __( 'Update Item', 'text_domain' ),
                        'view_item'             => __( 'View Item', 'text_domain' ),
                        'view_items'            => __( 'View Items', 'text_domain' ),
                        'search_items'          => __( 'Search Item', 'text_domain' ),
                        'not_found'             => __( 'Not found', 'text_domain' ),
                        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                        'featured_image'        => __( 'Featured Image', 'text_domain' ),
                        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                        'items_list'            => __( 'Items list', 'text_domain' ),
                        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
                    );
                    $args = array(
                        'label'                 => __( 'servicio', 'text_domain' ),
                        'description'           => __( 'vista de servicios', 'text_domain' ),
                        'labels'                => $labels,
                        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
                        'taxonomies'            => array( 'category', 'post_tag' ),
                        'hierarchical'          => false,
                        'public'                => true,
                        'show_ui'               => true,
                        'show_in_menu'          => true,
                        'menu_position'         => 5,
                        'menu_icon'             => 'dashicons-admin-tools',
                        'show_in_admin_bar'     => true,
                        'show_in_nav_menus'     => true,
                        'can_export'            => true,
                        'has_archive'           => true,
                        'exclude_from_search'   => false,
                        'publicly_queryable'    => true,
                        'capability_type'       => 'page',
                    );
                    register_post_type( 'servicios', $args );
                
                }
                add_action( 'init', 'servicios', 0 );
                
                }            