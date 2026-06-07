<?php
/**
 * AAWAI Theme Functions
 *
 * @package AAWAI
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function aawai_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aawai'),
        'footer' => __('Footer Menu', 'aawai'),
    ));
}
add_action('after_setup_theme', 'aawai_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function aawai_enqueue_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    
    // Styles
    wp_enqueue_style('aawai-style', get_template_directory_uri() . '/css/style.css', array(), $theme_version);
    wp_enqueue_style('aawai-animations', get_template_directory_uri() . '/css/animations.css', array(), $theme_version);
    
    // Page-specific styles
    if (is_page('about')) {
        wp_enqueue_style('aawai-about', get_template_directory_uri() . '/css/about.css', array(), $theme_version);
    }
    if (is_page('contact')) {
        wp_enqueue_style('aawai-contact', get_template_directory_uri() . '/css/contact.css', array(), $theme_version);
    }
    if (is_page('news') || is_home() || is_category() || is_archive() || is_single()) {
        wp_enqueue_style('aawai-news', get_template_directory_uri() . '/css/news.css', array(), $theme_version);
    }
    if (is_page('service')) {
        wp_enqueue_style('aawai-services', get_template_directory_uri() . '/css/services.css', array(), $theme_version);
    }
    if (is_page('privacy-policy')) {
        wp_enqueue_style('aawai-privacy', get_template_directory_uri() . '/css/privacypolicy.css', array(), $theme_version);
    }
    
    // Scripts
    wp_enqueue_script('aawai-transitions', get_template_directory_uri() . '/js/transitions.js', array(), $theme_version, true);
    wp_enqueue_script('aawai-main', get_template_directory_uri() . '/js/main.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'aawai_enqueue_scripts');

/**
 * Register Widget Areas
 */
function aawai_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'aawai'),
        'id' => 'footer-widget-area',
        'description' => __('Add widgets here to appear in your footer.', 'aawai'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'aawai_widgets_init');

/**
 * Default Menu Fallback
 */
function aawai_default_menu() {
    echo '<a href="' . esc_url(home_url('/privacy-policy')) . '" class="nav-item">個人情報保護法</a>';
    echo '<a href="' . esc_url(home_url('/service')) . '" class="nav-item">サービス</a>';
    echo '<a href="' . esc_url(home_url('/about')) . '" class="nav-item">会社案内</a>';
    echo '<a href="' . esc_url(home_url('/news')) . '" class="nav-item">AI最新情報</a>';
    echo '<div class="dropdown">';
    echo '<span class="nav-item">もっと見る</span>';
    echo '<div class="dropdown-content">';
    echo '<a href="' . esc_url(home_url('/contact')) . '">お問い合わせ</a>';
    echo '<a href="#">FAQ</a>';
    echo '</div>';
    echo '</div>';
    echo '<a href="#" class="nav-item cta">相談をする</a>';
}

/**
 * Customizer Settings
 */
function aawai_customize_register($wp_customize) {
    // Add sections, settings, and controls here if needed
}
add_action('customize_register', 'aawai_customize_register');

