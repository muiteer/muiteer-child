<?php
/*
 * @Description: Theme child functions
 * @Version: 1.0.6
 * @Author: ZAXU
 * @Link: http://www.zaxu.com
 * @Package: ZAXU
 */ 

function zaxu_enqueue_child_styles() {
  $parent_style = 'zaxu-parent-style';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'zaxu_enqueue_child_styles');

function zaxu_enqueue_child_scripts() {
  $parent_script = 'zaxu-parent-script';
    wp_enqueue_script($parent_script, get_stylesheet_directory_uri() . '/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'zaxu_enqueue_child_scripts');
?>