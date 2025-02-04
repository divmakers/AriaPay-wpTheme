<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <title>
  <?php
    // Initialize an empty title variable
    $page_title = '';

    if ( is_category() ) {
        // If it's a category archive page, display the category name
        $page_title = single_cat_title('', false);
    } elseif ( is_tag() ) {
        // If it's a tag archive page, display the tag name
        $page_title = single_tag_title('', false);
    } elseif ( is_post_type_archive() ) {
        // If it's a custom post type archive page, display the post type name
        $page_title = post_type_archive_title('', false);
    } elseif ( is_single() ) {
        // If it's a single post page, display the post title
        $page_title = single_post_title('', false);
    } else {
        // For other pages, display the default title
        $page_title = wp_title('', false, 'right');
    }

    // Append the site name to the title
    $page_title .= ' - ' . get_bloginfo('name');

    // Output the final title
    // echo esc_html($page_title);
  ?>
</title> -->


  <?php wp_head() ?>
</head>

<body <?php body_class($extended_body_classes); ?> class="bg-white-300 dark:bg-blue-800 overflow-x-hidden <?=($_SESSION['mode'] == 'dark') ?? 'dark' ?>">
  <?php wp_body_open(); ?>
  
  <!-- Header Start -->
  <header id="header" class="bg-white-100 md:h-[116px] dark:bg-blue-900 fixed w-full z-[99999] top-0 right-0">

    <!-- Header Desktop -->
    <?php get_template_part('template-parts/header/desktop'); ?>
    <!-- Header Mobile -->
    <?php get_template_part('template-parts/header/mobile'); ?>

  </header>
  <?php get_template_part('template-parts/header/megamenu');?>
<!-- Progress Bar Start -->
<div id="scrollBar" class="top-[60px] md:top-[116px]"></div>
<!-- Progress Bar End -->
 <?php get_template_part('template-parts/header/mobile-drawer')?>
<!-- Header End -->