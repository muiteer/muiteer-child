<?php
/*
 * @Description: Theme child functions
 * @Version: 1.0.9
 * @Author: ZAXU
 * @Link: http://www.zaxu.com
 * @Package: ZAXU
 */

if ( !defined('ABSPATH') ) exit;

// Enqueue frontend assets start
  function zaxu_enqueue_child_styles() {
    wp_enqueue_style(
      'zaxu-child-theme',
      get_stylesheet_directory_uri() . '/style.css',
      array('zaxu-parent-theme')
    );
  }
  add_action('wp_enqueue_scripts', 'zaxu_enqueue_child_styles');
// Enqueue frontend assets end

// Enqueue backend assets start
  function zaxu_enqueue_child_scripts() {
    wp_enqueue_script(
      'zaxu-child-theme',
      get_stylesheet_directory_uri() . '/main.js',
      array('jquery'),
      true,
      true
    );
  }
  add_action('wp_enqueue_scripts', 'zaxu_enqueue_child_scripts', 12);

  function zaxu_enqueue_admin_child_styles() {
    wp_enqueue_style(
      'zaxu-admin-child-theme',
      get_stylesheet_directory_uri() . '/admin-style.css'
    );
  }
  add_action('admin_enqueue_scripts', 'zaxu_enqueue_admin_child_styles');

  function zaxu_enqueue_admin_child_scripts() {
    wp_enqueue_script(
      'zaxu-admin-child-theme',
      get_stylesheet_directory_uri() . '/admin-main.js',
      array('jquery'),
      true,
      true
    );
  }
  add_action('admin_enqueue_scripts', 'zaxu_enqueue_admin_child_scripts');
// Enqueue backend assets end
?>