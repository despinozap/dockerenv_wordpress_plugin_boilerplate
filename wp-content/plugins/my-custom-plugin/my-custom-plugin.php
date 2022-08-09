<?php
/*
  Plugin Name: My custom plugin for WordPress
  Plugin URI: https://www.davidespinoza.dev
  Description: This is a custom basic plugin for WordPress.
  Version: 1.0
  Author: PyramIT
  Author URI: https://www.davidespinoza.dev
  License: GPLv2 or later
*/

// Add plugin style
function mycustomplugin_load_plugin_css()
{
  $pluginUrl = plugin_dir_url( __FILE__ );

  wp_enqueue_style( 'mycustomplugin_style', $pluginUrl . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mycustomplugin_load_plugin_css' );

// Add plugin content in footer
add_action('wp_footer', 'mycustomplugin_load_plugin_content', 10);
function mycustomplugin_load_plugin_content()
{
  $htmlContent = "
    <div class=\"my-custom-plugin-container\">
    </div>
  ";

  echo $htmlContent;
}

// Add plugin script  
function mycustomplugin_load_plugin_script()
{
  $pluginUrl = plugin_dir_url( __FILE__ );

  wp_enqueue_script( 'mycustomplugin_script', $pluginUrl . 'js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'mycustomplugin_load_plugin_script' );