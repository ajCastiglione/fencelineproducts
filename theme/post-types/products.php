<?php

define('PRODUCTSDOMAIN', 'post-types');
define('PRODUCTSPATH', get_template_directory() . '/post-types/products.php');

function regsiter_products_type()
{
    $labels = array(
        'name' => __('Products', PRODUCTSDOMAIN),
        'singular_name' => __('Product', PRODUCTSDOMAIN),
        'add_new' => __('Add New Product', PRODUCTSDOMAIN),
        'add_new_item' => __('Add New Product', PRODUCTSDOMAIN)
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'show_in_rest' => true,
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor', 'revisions', 'thumbnail')
    );

    register_post_type('products', $args);
}

add_action('init', 'regsiter_products_type');
