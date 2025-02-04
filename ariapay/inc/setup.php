<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;



add_action('after_setup_theme', 'rt_aria_themeSetup');
function rt_aria_themeSetup()
{
    // Add Supports
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ]);

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'taktheme' ),
            'mobile' => __( 'Mobile Menu', 'taktheme' ),
            'footer1'  => __( 'Footer 1 Menu', 'taktheme' ),
            'footer2'  => __( 'Footer 2 Menu', 'taktheme' ),
            'footer3'  => __( 'Footer 3 Menu', 'taktheme' ),
        )
    );

    // Remove Actions
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_head', 'wp_resource_hints', 2);
}
