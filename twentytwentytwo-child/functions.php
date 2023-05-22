<?php

/* -- Register scripts and styling -- */

add_action('wp_enqueue_scripts', 'bg_enqueue_files');

function bg_enqueue_files() {
  wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
  wp_enqueue_script('bg-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

  wp_localize_script('bg-main-script', 'bgdata', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

/* -- Register Post Types -- */

add_action('init', 'bg_add_post_types');

function bg_add_post_types() {
  // Portfolio Post Type
  register_post_type('portfolio', array(
    'capability_type' => 'portfolio',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => true,
    'show_ui' => true,
    'labels' => array(
      'name' => __('Portfolios'),
      'add_new_item' => __('Add New Portfolio'),
      'edit_item' => __('Edit Portfolio'),
      'all_items' => __('All Portfolios'),
      'singular_name' => __('Portfolio')
    ),
    'menu_icon' => 'dashicons-id'
  ));
}