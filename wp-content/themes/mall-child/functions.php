<?php
/**
 * @package 	WordPress
 * @subpackage 	Mall Child
 * @version		1.1.3
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function mall_child_enqueue_styles() {
    wp_enqueue_style('child-theme-style', get_stylesheet_uri(), array('theme-style'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'mall_child_enqueue_styles', 11);
?>