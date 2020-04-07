<?php

/* This file should contain all the functions of the child theme. Most of the theme's functions can be overwritten (some are critical and shouldn't be tampered with). 
*/

function muiteer_enqueue_child_styles() {
  $parent_style = 'muiteer-parent-style';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'muiteer_enqueue_child_styles');

function muiteer_enqueue_child_scripts() {
	$parent_script = 'muiteer-parent-script';
    wp_enqueue_script($parent_script, get_stylesheet_directory_uri() . '/main.js', array('jquery'),'', true);
}
add_action('wp_enqueue_scripts', 'muiteer_enqueue_child_scripts');