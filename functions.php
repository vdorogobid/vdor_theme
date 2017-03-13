<?php

require_once('wp_bootstrap_navwalker.php');
function loadScriptSite(){

    /*
     * get_template_directory_uri()
     * Получает URL текущей темы. Учитывает SSL. Не учитывает наличие дочерней темы. Не содержит закрывающий слэш.
     * https://wp-kama.ru/function/get_template_directory_uri
     */

    $version = false;

    wp_register_style(
        'vdorogobid-bootstrap', //$handle
        get_template_directory_uri().'/css/bootstrap.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_register_style(
        'vdorogobid-custome', //$handle
        get_template_directory_uri().'/css/custome.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_enqueue_style('vdorogobid-bootstrap');
    wp_enqueue_style('vdorogobid-custome');

}






add_action( 'wp_enqueue_scripts', 'loadScriptSite');

/**
 * Включаем поддержку произвольных меню
 */
function registerNavMenu() {
    register_nav_menu( 'primary', __('Primary Menu', VDOROGOBID_THEME_TEXTDOMAIN) );
}
add_action( 'after_setup_theme', 'registerNavMenu', 100 );


define("VDOROGOBID_THEME_TEXTDOMAIN", 'vdor_theme');

/**
 * Загрузка Text Domain
 */
function themeLocalization(){
    load_theme_textdomain(VDOROGOBID_THEME_TEXTDOMAIN, get_template_directory() . '/languages/');
}
add_action('after_setup_theme', 'themeLocalization');


//post-formats
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
//post-thumbnails
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header', array(
    'video' => true,
) );

add_theme_support( 'automatic-feed-links' );


add_theme_support('custom-logo');

//Длина анотации постов в цикле
function set_excerpt_length(){
  return 35;
}
add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}
add_action('widgets_init', 'wpb_init_widgets');


// Customizer File
require get_template_directory(). '/inc/customizer.php';
