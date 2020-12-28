<?php
function create_post_type($title,$name,$slug,$support){
    $labels = array(
        'name' => __( $title, 'text_domain' ),
        'singular_name' => __( $title, 'text_domain' ),
        'add_new' => __( 'Add New', 'text_domain' ),
        'add_new_item' => __( 'Add New', 'text_domain' ),
        'edit_item' => __( 'Edit '.$title, 'text_domain' ),
        'new_item' => __( 'New '.$title, 'text_domain' ),
        'all_items' => __( 'All '.$title, 'text_domain' ),
        'view_item' => __( 'View '.$title, 'text_domain' ),
        'search_items' => __( 'Search '.$title, 'text_domain' ),
        'not_found' => __( 'No post found', 'text_domain' ),
        'not_found_in_trash' => __( 'No post found in Trash', 'text_domain' ),
        'parent_item_colon' => '',
        'menu_name' => __( $title, 'text_domain' ),

        'name_admin_bar'        => __( $title, 'text_domain' ),
        'archives'              => __( $title, 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
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
        'labels' => __( $labels, 'text_domain' ),
        'menu_icon' => null,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'rewrite' => array( 'slug' => __( $slug, 'text_domain' )),
        'supports' => __( $support, 'text_domain' ),
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => __( $name, 'text_domain' ), // show page archive
        'exclude_from_search'   => false,
        'capability_type'       => 'page',
    );
    register_post_type($name, $args );
}
/* Thêm thông tin taxonomy  */
function create_taxonomy_theme($title="Category",$slug,$name,$post_type) {
    $labels = array(
        'name' => __( $title, 'text_domain' ),
        'singular' => __( $title, 'text_domain' ),
        'menu_name' => __( $title, 'text_domain' ),
    );
    $args = array(
        'labels' => __( $labels, 'text_domain' ),
        'show_admin_column' => true,
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => __( $slug, 'text_domain' )),
        'show_tagcloud' => true,
    );
    register_taxonomy($name,$post_type,$args);
}
?>