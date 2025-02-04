<?php

/**
 * The template for displaying search results pages
 
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$searched_query    = $_GET['s'];
$searched_category = $_GET['c'];


?>


<section class="bg-white-300 dark:bg-blue-800 mt-[60px] md:mt-[116px]">
    <?php get_template_part('template-parts/breadcrumb') ?>
    <section class="bg-white-300 dark:bg-blue-800 md:pb-[85px] pb-[45px]">
        <div class="container">
            <div class="pt-[29px]">
                <p
                    class="md:text-[25px] text-base md:leading-[35px] dark:text-dark-6 leading-[22px] font-semibold">
                    نتایج جستجو برای "<?= $query = get_search_query(); ?>"
                    <?php
                    // if ($searched_category) {
                    switch ($searched_category) {
                        case 'services':
                            echo ' در خدمات';
                            break;
                        case 'training':
                            echo ' در آموزش‌ها';
                            break;
                        case 'internationalpayment':
                            echo ' در پرداخت‌های بین‌المللی';
                            break;
                        default:
                            # code...
                            break;
                    }
                    // }
                    ?>
                </p>
            </div>

            <?php
            if (!$searched_category || $searched_category == 'services'):
            ?>
                <!-- Services Start -->
                <section class="pt-[38px]">
                    <div class="flex justify-between items-center pb-[23px]">
                        <div class="flex items-center gap-[10px]">
                            <svg
                                class="block dark:hidden md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 37"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m24.522 5.214 3.084 1.618c3.317 1.74 4.975 2.611 5.896 4.175s.921 3.51.921 7.403v.18c0 3.893 0 5.839-.92 7.403-.922 1.564-2.58 2.434-5.898 4.175l-3.083 1.618c-2.706 1.42-4.06 2.13-5.515 2.13s-2.81-.71-5.516-2.13l-3.083-1.618c-3.318-1.74-4.976-2.611-5.897-4.175s-.921-3.51-.921-7.403v-.18c0-3.893 0-5.839.92-7.403.922-1.564 2.58-2.434 5.898-4.175l3.083-1.618c2.707-1.42 4.06-2.13 5.515-2.13s2.81.71 5.516 2.13Z"
                                    stroke="#1D1D1D"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                                <path
                                    opacity=".5"
                                    d="M32.875 11.563 19 18.5m0 0L5.125 11.563M19 18.5v14.646"
                                    stroke="#1D1D1D"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hidden dark:block md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 37"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m24.522 5.214 3.084 1.618c3.317 1.74 4.975 2.611 5.896 4.175s.921 3.51.921 7.403v.18c0 3.893 0 5.839-.92 7.403-.922 1.564-2.58 2.434-5.898 4.175l-3.083 1.618c-2.706 1.42-4.06 2.13-5.515 2.13s-2.81-.71-5.516-2.13l-3.083-1.618c-3.318-1.74-4.976-2.611-5.897-4.175s-.921-3.51-.921-7.403v-.18c0-3.893 0-5.839.92-7.403.922-1.564 2.58-2.434 5.898-4.175l3.083-1.618c2.707-1.42 4.06-2.13 5.515-2.13s2.81.71 5.516 2.13Z"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                                <path
                                    opacity=".5"
                                    d="M32.875 11.563 19 18.5m0 0L5.125 11.563M19 18.5v14.646"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <p class="md:text-[25px] text-base md:leading-[35px] leading-[22px] font-semibold dark:text-white-100">
                                خدمات
                            </p>
                            <?php
                            // Exception array for pages to exclude
                            $excluded_page_ids = array(164, 4002, 197, 4535, 10, 8, 229, 7, 3, 198, 4542,); // Replace with actual page IDs to exclude

                            $args = array(
                                'post_type' => 'page',
                                'post_status' => 'publish',
                                's' => $query,
                                'posts_per_page' => -1,
                                'post__not_in' => $excluded_page_ids
                            );

                            $search_query = new WP_Query($args);

                            if ($search_query->have_posts()) {
                                while ($search_query->have_posts()) {
                                    $search_query->the_post();
                                    $results_services[] = array(
                                        'title'    => get_the_title(),
                                        'link'     => get_permalink(),
                                        'img_link' => get_the_post_thumbnail_url()
                                    );
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                        <p class="md:text-[21px] text-sm md:leading-[26px] leading-[17px] font-semibold dark:text-white-100">
                            <?php echo ($results_services) ? count($results_services) : 'بدون'; ?> نتیجه
                        </p>
                    </div>
                    <?php
                    if ($results_services) {
                    ?>
                        <div class="swiper services">
                            <div class="swiper-wrapper">
                                <?php foreach ($results_services as $results_service) { ?>
                                <a href="<?=$results_service['link']?>" class="swiper-slide">
                                    <?php if($results_service['img_link']) { ?>
                                        <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                            <img src="<?=$results_service['img_link'] ?>" class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover" alt="<?=$results_service['title']?>" />
                                        </div>
                                    <?php }else{?>
                                    <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                        <img
                                            src="<?= RTARIA_ASSETS .'/images/patern-footer.png' ?>"
                                            class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover"
                                            alt="<?=$results_service['title']?>" />
                                        <div class="flex items-center justify-center pt-5">
                                            <svg class="flex items-center justify-center" width="151" height="35" viewBox="0 0 151 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity=".7" d="M12.38 27.9C4.38 27.9.3 24.38.3 18.74v-.24h4.32v.64c0 3.2 1.88 4.8 7.76 4.8 5.12 0 6.92-1.12 6.92-3.64 0-2.32-1.36-3.2-4.76-3.84l-6.56-1.08C3.46 14.58.26 12.5.26 8.1.26 4.22 3.46.3 11.78.3c7.84 0 11.4 3.92 11.4 9.16v.24H18.9v-.52c0-3.28-1.96-4.92-7.52-4.92-4.88 0-6.8 1.2-6.8 3.6 0 2.32 1.36 3.08 4.52 3.76l6.52 1.12c5.36.96 8 3.4 8 7.32 0 4.08-3.32 7.84-11.24 7.84m18.627-.4h-4.32V.7h4.32v14.8h5.68l5.96-7.88h5.04l-7.48 9.56 7.44 10.32h-5.08l-5.88-8.12h-5.68zm22.006 6.8h-2.84v-3.92h3.88c1.76 0 2.48-.48 3.08-1.84l.48-1.04-9.8-19.88h4.84l5.08 10.56 1.96 4.76h.32l1.88-4.8 4.68-10.52h4.76l-10.36 22.04c-1.64 3.56-3.88 4.64-7.96 4.64m30.472-6.4c-6.56 0-10.84-4.2-10.84-10.32 0-6.2 4.28-10.36 10.84-10.36 5.96 0 10.32 3.36 10.32 8.32v.4h-4.28v-.24c0-3.08-2.24-4.6-6.12-4.6-4.48 0-6.48 2.12-6.48 6.48 0 4.28 2 6.44 6.48 6.44 3.88 0 6.12-1.52 6.12-4.6v-.28h4.28v.44c0 4.96-4.36 8.32-10.32 8.32m23.675 0c-6.6 0-11.04-4.2-11.04-10.32 0-6.2 4.44-10.36 11.04-10.36 6.64 0 11.08 4.16 11.08 10.36 0 6.12-4.44 10.32-11.08 10.32m0-3.84c4.84 0 6.84-2.28 6.84-6.48 0-4.24-2-6.56-6.84-6.56-4.8 0-6.8 2.32-6.8 6.56 0 4.2 2 6.48 6.8 6.48M125.695 5.3h-4.32V.7h4.32zm0 22.2h-4.32V7.62h4.32zm8.32 0h-4.32V7.62h3.96v6.16h.28c.6-3.36 3.24-6.56 8.28-6.56 5.52 0 8.24 3.72 8.24 8.32V27.5h-4.32V16.7c0-3.72-1.68-5.6-5.8-5.6-4.36 0-6.32 2.24-6.32 6.56z" fill="#fff" />
                                            </svg>
                                        </div>
                                        <div class="flex items-center justify-center pt-[13px]">
                                            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity=".2" d="M36.805 73.5c20.158 0 36.5-16.341 36.5-36.5S56.963.5 36.805.5.305 16.842.305 37s16.341 36.5 36.5 36.5" fill="#fff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M42.694 21.108 27.539 53.846h-.572c-1.407 0-2.752-.27-3.99-.746l15.25-32.946a11.1 11.1 0 0 1 4.467.954M22.284 52.81c-3.851-1.775-6.534-5.665-6.534-10.195 0-6.206 5.02-11.231 11.215-11.231 0-5.936 4.6-10.78 10.417-11.193zm22.458 1.035h-3.92L51.15 31.53a11.2 11.2 0 0 1 3.405 1.117zm-9.985 0h4.247l10.398-22.461c0-2.102-.584-4.06-1.59-5.741zM59.93 38.77c.44 1.204.691 2.497.691 3.852 0 4.831-3.06 8.947-7.351 10.528zM50.5 53.79l8.13-17.555a11.2 11.2 0 0 0-2.42-2.535l-9.323 20.146h2.52c.364 0 .734-.018 1.093-.056m-21.808.056h4.58l13.653-29.494a11.3 11.3 0 0 0-3.292-2.78z" fill="#fff" />
                                            </svg>
                                        </div>
                                    </div>
                                    <? } ?>
                                    <p
                                        class="text-center pt-[22px] md:text-[19px] text-sm md:leading-[22px] leading-[17px] font-medium dark:text-white-100">
                                        <!-- خرید ارز <span class="text-blue-500">دیجیتال</span> اسکای کوین -->
                                        <?=$results_service['title']?>
                                    </p>
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    <? } else { ?>
                        <p>متاسفانه برای عبارت مورد جستجوی شما، در خدمات نتیجه‌ای یافت نشد</p>
                    <? } ?>

                </section>
                <!-- Services End -->
            <?php
            endif;
            if (!$searched_category || $searched_category == 'training'):

                $args = array(
                    'post_type' => 'trainings',
                    // 'post_type' => 'blog',
                    'post_status' => 'publish',
                    's' => $query,
                    'posts_per_page' => -1
                );
    
                $search_query = new WP_Query($args);
                if ($search_query->have_posts()) {
                    while ($search_query->have_posts()) {
                        $search_query->the_post();

                        // Get the terms from the custom taxonomy (replace 'custom_taxonomy' with your actual taxonomy slug)
                        $terms = get_the_terms(get_the_ID(), 'category-trainings');
                        $main_term = null;

                        // Find the main term (parent term or first term if hierarchy doesn't matter)
                        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                            foreach ( $terms as $term ) {
                                if ( $term->parent == 0 ) { // Look for a parent term
                                    $main_term = $term;
                                    break;
                                }
                            }
                        }
                        // Set the main term name and link if it exists
                        $catName = $main_term ? $main_term->name : "";
                        $catLink = $main_term ? get_term_link( $main_term->term_id, 'category-trainings' ) : "";

                        
                        $results_trainings[] = array(
                            'title'      => get_the_title(),
                            'updated_on' => get_post_timestamp(),
                            'link'       => get_permalink(),
                            'excerpt'    => get_the_excerpt(),
                            'img_link'   => get_the_post_thumbnail_url(),
                            'catName'    => $catName,
                            'catLink'    => $catLink
                        );
                        $current_time = current_time( 'timestamp' );
                    }
                }
                wp_reset_postdata();
            ?>
                <!-- Trainings Start -->
                <section class="pt-[38px]">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-[10px]">
                            <svg
                                class="block dark:hidden md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#1C274D"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#1C274D"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hidden dark:block md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#fff"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <p
                                class="md:text-[25px] text-base md:leading-[35px] leading-[22px] font-semibold dark:text-white-100">
                                آموزش ها
                            </p>
                        </div>
                        <p class="md:text-[21px] text-sm md:leading-[26px] leading-[17px] font-semibold dark:text-white-100">
                            <?php echo ($results_trainings) ? count($results_trainings) : 'بدون'; ?> نتیجه
                        </p>
                    </div>
                    <?php
                    if ($results_trainings) { ?>
                    <div class="swiper trainings">
                        <div class="swiper-wrapper">
                            <?php
                            $results_trainings_chunked = array_chunk($results_trainings, 4);
                            foreach ($results_trainings_chunked as $result_trainings) { ?>
                            <div class="swiper-slide">
                                <div class="md:grid grid-cols-4 flex flex-col gap-5 md:gap-[46px] pt-4">
                                    <?php
                                    foreach ($result_trainings as $results_training) { ?>
                                    <div class="lg:col-span-1 md:col-span-2 dark:border-none border border-gray-300 rounded-md bg-white-100 dark:bg-dark-1">
                                        <div class="flex flex-col justify-between h-full py-[15px] px-[11px]">
                                            <div class="relative">
                                                <div class="relative">
                                                    <img src="<?=($results_training['img_link']) ? $results_training['img_link'] : RTARIA_ASSETS.'/images/Trainings1.png'; ?>" class="w-full h-full object-cover rounded-md" />
                                                    <?php if ($results_training['catName']) { ?>
                                                    <a href="<?=$results_training['catLink']?>" class="text-white-10 md:text-sm text-[15px] font-semibold md:leading-[23px] leading-[25px] bg-blue-500 rounded-md px-3 py-1 absolute bottom-3 right-3">
                                                        <?=$results_training['catName']?>
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                                <p
                                                    class="md:text-[15px] text-base font-bold md:leading-[26px] leading-[29px] pt-[14px] dark:text-white-100">
                                                    <!-- ساده ترین راه خرید
                                                    <span class="text-blue-500">ارز دیجیتال</span> چیست .چرا
                                                    باید از آریا پی خرید کنیم -->
                                                <?=$results_training['title'];?>
                                                </p>
                                                <p
                                                    class="md:ext-[13px] text-sm font-medium md:leading-[26px] leading-[28px] pt-[10px] dark:text-white-100">
                                                    <?=$results_training['excerpt']?>
                                                </p>
                                            </div>
                                            <div class="flex justify-between items-center pt-2">
                                                <p
                                                    class="md:text-[11px] text-xs md:leading-[23px] leading-[25px] font-medium dark:text-white-100">
                                                    <?=human_time_diff($results_training['updated_on'], $current_time) . " قبل";?>
                                                </p>
                                                <a href="<?=$results_training['link'] ?>"
                                                    class="text-[13px] leading-[16px] font-normal text-blue-500 bg-blue-200 dark:bg-dark-11 dark:text-white-100 px-6 py-2 rounded-md">
                                                    خواندن مطلب
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <? } ?>
                                </div>
                            </div>
                            <? } ?>


                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="pt-[23px] swiper-pagination"></div> -->
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                <? }else{ ?>
                    <p>متاسفانه برای عبارت مورد جستجوی شما، در آموزش‌ها چیزی یافت نشد</p>
                <? } ?>
                </section>
                <!-- Trainings End -->



                <?php
            endif;
            if (!$searched_category || $searched_category == 'training'):

                $args = array(
                    // 'post_type' => 'trainings',
                    'post_type' => 'blog',
                    'post_status' => 'publish',
                    's' => $query,
                    'posts_per_page' => -1
                );
    
                $search_query = new WP_Query($args);
                if ($search_query->have_posts()) {
                    while ($search_query->have_posts()) {
                        $search_query->the_post();

                        // Get the terms from the custom taxonomy (replace 'custom_taxonomy' with your actual taxonomy slug)
                        $terms = get_the_terms(get_the_ID(), 'category-blog');
                        $main_term = null;

                        // Find the main term (parent term or first term if hierarchy doesn't matter)
                        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                            foreach ( $terms as $term ) {
                                if ( $term->parent == 0 ) { // Look for a parent term
                                    $main_term = $term;
                                    break;
                                }
                            }
                        }
                        // Set the main term name and link if it exists
                        $catName = $main_term ? $main_term->name : "";
                        $catLink = $main_term ? get_term_link( $main_term->term_id, 'category-blog' ) : "";

                        
                        $results_trainings[] = array(
                            'title'      => get_the_title(),
                            'updated_on' => get_post_timestamp(),
                            'link'       => get_permalink(),
                            'excerpt'    => get_the_excerpt(),
                            'img_link'   => get_the_post_thumbnail_url(),
                            'catName'    => $catName,
                            'catLink'    => $catLink
                        );
                        $current_time = current_time( 'timestamp' );
                    }
                }
                wp_reset_postdata();
            ?>
                <!-- BLOGS Start -->
                <section class="pt-[38px]">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-[10px]">
                            <svg
                                class="block dark:hidden md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#1C274D"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#1C274D"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hidden dark:block md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#fff"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <p
                                class="md:text-[25px] text-base md:leading-[35px] leading-[22px] font-semibold dark:text-white-100">
                                بلاگ‌پست‌های آریاپِی
                            </p>
                        </div>
                        <p class="md:text-[21px] text-sm md:leading-[26px] leading-[17px] font-semibold dark:text-white-100">
                            <?php echo ($results_trainings) ? count($results_trainings) : 'بدون'; ?> نتیجه
                        </p>
                    </div>
                    <?php
                    if ($results_trainings) { ?>
                    <div class="swiper trainings">
                        <div class="swiper-wrapper">
                            <?php
                            $results_trainings_chunked = array_chunk($results_trainings, 4);
                            foreach ($results_trainings_chunked as $result_trainings) { ?>
                            <div class="swiper-slide">
                                <div class="md:grid grid-cols-4 flex flex-col gap-5 md:gap-[46px] pt-4">
                                    <?php
                                    foreach ($result_trainings as $results_training) { ?>
                                    <div class="lg:col-span-1 md:col-span-2 dark:border-none border border-gray-300 rounded-md bg-white-100 dark:bg-dark-1">
                                        <div class="flex flex-col justify-between h-full py-[15px] px-[11px]">
                                            <div class="relative">
                                                <div class="relative">
                                                    <img src="<?=($results_training['img_link']) ? $results_training['img_link'] : RTARIA_ASSETS.'/images/Trainings1.png'; ?>" class="w-full h-full object-cover rounded-md" />
                                                    <?php if ($results_training['catName']) { ?>
                                                    <a href="<?=$results_training['catLink']?>" class="text-white-10 md:text-sm text-[15px] font-semibold md:leading-[23px] leading-[25px] bg-blue-500 rounded-md px-3 py-1 absolute bottom-3 right-3">
                                                        <?=$results_training['catName']?>
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                                <p
                                                    class="md:text-[15px] text-base font-bold md:leading-[26px] leading-[29px] pt-[14px] dark:text-white-100">
                                                    <!-- ساده ترین راه خرید
                                                    <span class="text-blue-500">ارز دیجیتال</span> چیست .چرا
                                                    باید از آریا پی خرید کنیم -->
                                                <?=$results_training['title'];?>
                                                </p>
                                                <p
                                                    class="md:ext-[13px] text-sm font-medium md:leading-[26px] leading-[28px] pt-[10px] dark:text-white-100">
                                                    <?=$results_training['excerpt']?>
                                                </p>
                                            </div>
                                            <div class="flex justify-between items-center pt-2">
                                                <p
                                                    class="md:text-[11px] text-xs md:leading-[23px] leading-[25px] font-medium dark:text-white-100">
                                                    <?=human_time_diff($results_training['updated_on'], $current_time) . " قبل";?>
                                                </p>
                                                <a href="<?=$results_training['link'] ?>"
                                                    class="text-[13px] leading-[16px] font-normal text-blue-500 bg-blue-200 dark:bg-dark-11 dark:text-white-100 px-6 py-2 rounded-md">
                                                    خواندن مطلب
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <? } ?>
                                </div>
                            </div>
                            <? } ?>


                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="pt-[23px] swiper-pagination"></div> -->
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                <? }else{ ?>
                    <p>متاسفانه برای عبارت مورد جستجوی شما، در آموزش‌ها چیزی یافت نشد</p>
                <? } ?>
                </section>
                <!-- BLOGS End -->


                <!-- NEWS Start -->

                <?php
            endif;
            if (!$searched_category || $searched_category == 'news'):

                $args = array(
                    // 'post_type' => 'trainings',
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    's' => $query,
                    'posts_per_page' => -1
                );
    
                $search_query = new WP_Query($args);
    
                if ($search_query->have_posts()) {
                    while ($search_query->have_posts()) {
                        $search_query->the_post();

                        // Get the terms from the custom taxonomy (replace 'custom_taxonomy' with your actual taxonomy slug)
                        $terms = get_the_terms(get_the_ID(), 'category-news');
                        $main_term = null;

                        // Find the main term (parent term or first term if hierarchy doesn't matter)
                        if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
                            foreach ( $terms as $term ) {
                                if ( $term->parent == 0 ) { // Look for a parent term
                                    $main_term = $term;
                                    break;
                                }
                            }
                        }

                        // Set the main term name and link if it exists
                        $catName = $main_term ? $main_term->name : "";
                        $catLink = $main_term ? get_term_link( $main_term->term_id, 'category-news' ) : "";


                        $results_news[] = array(
                            'title'      => get_the_title(),
                            'updated_on' => get_post_timestamp(),
                            'link'       => get_permalink(),
                            'excerpt'    => get_the_excerpt(),
                            'img_link'   => get_the_post_thumbnail_url(),
                            'catName'    => $catName,
                            'catLink'    => $catLink

                        );
                        $current_time = current_time( 'timestamp' );
                    }
                }
                wp_reset_postdata();
            ?>
                <!-- NEWS Start -->
                <section class="pt-[38px]">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-[10px]">
                            <svg
                                class="block dark:hidden md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#1C274D"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#1C274D"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hidden dark:block md:w-[38px] md:h-[38px] w-[24px] h-[24px]"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.58 6.376a7.97 7.97 0 0 1 6.837 0l10.316 4.837c2.243 1.052 2.243 4.693 0 5.745l-10.316 4.836a7.97 7.97 0 0 1-6.837 0L5.266 16.958c-2.244-1.052-2.244-4.693 0-5.745z"
                                    stroke="#fff"
                                    stroke-width="2.313" />
                                <path
                                    opacity=".5"
                                    d="M3.582 14.085v8.48M29.79 18.71v7.902c0 1.554-.776 3.01-2.135 3.762-2.264 1.254-5.888 2.982-8.656 2.982-2.77 0-6.392-1.728-8.656-2.982-1.36-.753-2.136-2.208-2.136-3.762V18.71"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <p
                                class="md:text-[25px] text-base md:leading-[35px] leading-[22px] font-semibold dark:text-white-100">
                                اخبار
                            </p>
                        </div>
                        <p class="md:text-[21px] text-sm md:leading-[26px] leading-[17px] font-semibold dark:text-white-100">
                            <?php echo ($results_news) ? count($results_news) : 'بدون'; ?> نتیجه
                        </p>
                    </div>
                    <?php
                    if ($results_news) { ?>
                    <div class="swiper trainings">
                        <div class="swiper-wrapper">
                            <?php
                            $results_news_chunked = array_chunk($results_news, 4);
                            foreach ($results_news_chunked as $result_news) { ?>
                            <div class="swiper-slide">
                                <div class="md:grid grid-cols-4 flex flex-col gap-5 md:gap-[46px] pt-4">
                                    <?php
                                    foreach ($result_news as $results_new) { ?>
                                    <div class="lg:col-span-1 md:col-span-2 dark:border-none border border-gray-300 rounded-md bg-white-100 dark:bg-dark-1">
                                        <div class="flex flex-col justify-between h-full py-[15px] px-[11px]">
                                            <div class="relative">
                                                <div class="relative">
                                                    <img src="<?=($results_new['img_link']) ? $results_new['img_link'] : RTARIA_ASSETS.'/images/Trainings1.png' ?>" class="w-full h-full object-cover rounded-md" />
                                                    <?php
                                                    if ($results_new['catLink']) { ?>
                                                        <a href="<?=$results_new['catLink']?>" class="text-white-10 md:text-sm text-[15px] font-semibold md:leading-[23px] leading-[25px] bg-blue-500 rounded-md px-3 py-1 absolute bottom-3 right-3">
                                                        <?=$results_new['catName']?>
                                                    </a>
                                                    <?php } ?>
                                                    
                                                </div>
                                                <p
                                                    class="md:text-[15px] text-base font-bold md:leading-[26px] leading-[29px] pt-[14px] dark:text-white-100">
                                                    <!-- ساده ترین راه خرید
                                                    <span class="text-blue-500">ارز دیجیتال</span> چیست .چرا
                                                    باید از آریا پی خرید کنیم -->
                                                <?=$results_new['title'];?>
                                                </p>
                                                <p
                                                    class="md:ext-[13px] text-sm font-medium md:leading-[26px] leading-[28px] pt-[10px] dark:text-white-100">
                                                    <?=$results_new['excerpt']?>
                                                </p>
                                            </div>
                                            <div class="flex justify-between items-center pt-2">
                                                <p
                                                    class="md:text-[11px] text-xs md:leading-[23px] leading-[25px] font-medium dark:text-white-100">
                                                    <?=human_time_diff($results_new['updated_on'], $current_time) . " قبل";?>
                                                </p>
                                                <a href="<?=$results_new['link'] ?>"
                                                    class="text-[13px] leading-[16px] font-normal text-blue-500 bg-blue-200 dark:bg-dark-11 dark:text-white-100 px-6 py-2 rounded-md">
                                                    خواندن مطلب
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <? } ?>
                                </div>
                            </div>
                            <? } ?>


                        </div>
                        <!-- Add Pagination -->
                        <!-- <div class="pt-[23px] swiper-pagination"></div> -->
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- Add Scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                <? }else{ ?>
                    <p>متاسفانه برای عبارت مورد جستجوی شما، در اخبار نتیجه‌ای یافت نشد.</p>
                <? } ?>
                </section>
                <!-- NEWS End -->
            <?php
            endif;
            if (!$searched_category || $searched_category == 'internationalpayment'):
            ?>
                <!-- International payment Start -->
                
                <!-- <section class="pt-[61px] hidden md:block">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-[10px]">
                            <svg
                                class="block dark:hidden"
                                width="38"
                                height="38"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle
                                    opacity="0.5"
                                    cx="18.9987"
                                    cy="19.4486"
                                    r="15.4167"
                                    stroke="#1D1D1D"
                                    stroke-width="2.3125" />
                                <path
                                    d="M19 27.157V27.9278V28.6986"
                                    stroke="#1D1D1D"
                                    stroke-width="2.3125"
                                    stroke-linecap="round" />
                                <path
                                    d="M19 10.1987V10.9695V11.7403"
                                    stroke="#1D1D1D"
                                    stroke-width="2.3125"
                                    stroke-linecap="round" />
                                <path
                                    d="M23.625 15.5945C23.625 13.4659 21.5543 11.7404 19 11.7404C16.4457 11.7404 14.375 13.4659 14.375 15.5945C14.375 17.7231 16.4457 19.4487 19 19.4487C21.5543 19.4487 23.625 21.1743 23.625 23.3029C23.625 25.4315 21.5543 27.157 19 27.157C16.4457 27.157 14.375 25.4315 14.375 23.3029"
                                    stroke="#1D1D1D"
                                    stroke-width="2.3125"
                                    stroke-linecap="round" />
                            </svg>
                            <svg
                                class="hidden dark:block"
                                width="38"
                                height="38"
                                viewBox="0 0 38 38"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle
                                    opacity=".5"
                                    cx="18.999"
                                    cy="19.449"
                                    r="15.417"
                                    stroke="#fff"
                                    stroke-width="2.313" />
                                <path
                                    d="M19 27.157v1.542m0-18.5v1.541m4.625 3.855c0-2.13-2.07-3.855-4.625-3.855-2.554 0-4.625 1.726-4.625 3.855s2.07 3.854 4.625 3.854c2.554 0 4.625 1.725 4.625 3.854s-2.07 3.854-4.625 3.854c-2.554 0-4.625-1.726-4.625-3.854"
                                    stroke="#fff"
                                    stroke-width="2.313"
                                    stroke-linecap="round" />
                            </svg>
                            <p
                                class="text-[25px] leading-[35px] font-semibold dark:text-white-100">
                                پرداخت بین المللی
                            </p>
                        </div>
                        <p
                            class="text-[21px] leading-[26px] font-semibold dark:text-white-100">
                            1 نتیجه
                        </p>
                    </div>

                    <div class="swiper International">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="flex lg:gap-x-[46px] gap-x-4 pt-[23px]">
                                    <div class="w-full h-full">
                                        <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                            <img
                                                src="../assets/images/patern-footer.png"
                                                class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover"
                                                alt="" />
                                            <div class="flex items-center justify-center pt-5">
                                                <svg
                                                    width="152"
                                                    height="28"
                                                    viewBox="0 0 152 28"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.7"
                                                        d="M15.6413 27.4489H0.0812501V0.648913H15.0813C20.2013 0.648913 23.2812 3.00891 23.2812 7.24891C23.2812 10.4089 21.5213 12.7689 17.4413 13.2489V13.5289C22.0013 14.0489 24.2413 16.5289 24.2413 20.0489C24.2413 24.6489 21.1613 27.4489 15.6413 27.4489ZM4.36125 4.52891V11.8889H14.4813C17.4813 11.8889 19.0013 10.7289 19.0013 8.20891C19.0013 5.68891 17.6013 4.52891 14.6013 4.52891H4.36125ZM4.36125 15.4489V23.5689H15.1613C18.3613 23.5689 19.9213 22.3689 19.9213 19.4489C19.9213 16.6489 18.3213 15.4489 15.1613 15.4489H4.36125ZM31.3591 5.24891H27.0391V0.648913H31.3591V5.24891ZM31.3591 27.4489H27.0391V7.56891H31.3591V27.4489ZM39.6794 27.4489H35.3594V7.56891H39.3194V13.7289H39.5994C40.1994 10.3689 42.8394 7.16891 47.8794 7.16891C53.3994 7.16891 56.1194 10.8889 56.1194 15.4889V27.4489H51.7994V16.6489C51.7994 12.9289 50.1194 11.0489 45.9994 11.0489C41.6394 11.0489 39.6794 13.2889 39.6794 17.6089V27.4489ZM65.8088 27.8489C61.6888 27.8489 59.0888 25.9289 59.0888 22.6489C59.0888 19.5689 61.5688 17.9689 65.4888 17.5289L74.5288 16.5689V15.4089C74.5288 12.1289 73.0888 10.9689 69.2888 10.9689C65.6088 10.9689 63.8088 12.1689 63.8088 15.0889V15.2489H59.5288V15.0889C59.5288 10.5689 63.2888 7.16891 69.6088 7.16891C75.9288 7.16891 78.7688 10.6089 78.7688 15.3689V27.4489H74.8088V22.4889H74.5288C73.4888 25.8489 70.3288 27.8489 65.8088 27.8489ZM63.4088 22.3689C63.4088 23.9689 64.4888 24.7289 66.9688 24.7289C71.4888 24.7289 74.5288 23.0489 74.5288 19.1289L66.7288 20.0089C64.4888 20.2889 63.4088 20.8089 63.4088 22.3689ZM86.945 27.4489H82.625V7.56891H86.585V13.7289H86.865C87.465 10.3689 90.105 7.16891 95.145 7.16891C100.665 7.16891 103.385 10.8889 103.385 15.4889V27.4489H99.065V16.6489C99.065 12.9289 97.385 11.0489 93.265 11.0489C88.905 11.0489 86.945 13.2889 86.945 17.6089V27.4489ZM117.274 27.8489C110.714 27.8489 106.434 23.6489 106.434 17.5289C106.434 11.3289 110.714 7.16891 117.274 7.16891C123.234 7.16891 127.594 10.5289 127.594 15.4889V15.8889H123.314V15.6489C123.314 12.5689 121.074 11.0489 117.194 11.0489C112.714 11.0489 110.714 13.1689 110.714 17.5289C110.714 21.8089 112.714 23.9689 117.194 23.9689C121.074 23.9689 123.314 22.4489 123.314 19.3689V19.0889H127.594V19.5289C127.594 24.4889 123.234 27.8489 117.274 27.8489ZM140.789 27.8489C134.269 27.8489 129.989 24.1689 129.989 17.5289C129.989 11.3289 134.229 7.16891 140.709 7.16891C146.869 7.16891 151.069 10.5689 151.069 16.6089C151.069 17.3289 151.029 17.8889 150.909 18.4889H134.029C134.189 22.3289 136.069 24.3689 140.669 24.3689C144.829 24.3689 146.549 23.0089 146.549 20.6489V20.3289H150.869V20.6889C150.869 24.9289 146.709 27.8489 140.789 27.8489ZM140.629 10.5689C136.229 10.5689 134.309 12.5289 134.069 16.0889H146.989V16.0089C146.989 12.3289 144.869 10.5689 140.629 10.5689Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center pt-[13px]">
                                                <svg
                                                    width="75"
                                                    height="76"
                                                    viewBox="0 0 75 76"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M37.5 75.9487C58.2107 75.9487 75 59.1593 75 38.4487C75 17.738 58.2107 0.948669 37.5 0.948669C16.7893 0.948669 0 17.738 0 38.4487C0 59.1593 16.7893 75.9487 37.5 75.9487Z"
                                                        fill="#F3BA2F" />
                                                    <path
                                                        d="M29.6567 35.226L37.501 27.3818L45.3452 35.2333L49.9082 30.6703L37.501 18.2558L25.0938 30.663L29.6567 35.226Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17.3047 38.445L21.8673 33.8822L26.4301 38.4448L21.8675 43.0076L17.3047 38.445Z"
                                                        fill="white" />
                                                    <path
                                                        d="M29.6523 41.6713L37.4966 49.5156L45.3408 41.664L49.9111 46.227H49.9038L37.4966 58.6415L25.0894 46.2343L25.082 46.227L29.6523 41.6713Z"
                                                        fill="white" />
                                                    <path
                                                        d="M48.5625 38.4528L53.1251 33.89L57.6879 38.4526L53.1253 43.0154L48.5625 38.4528Z"
                                                        fill="white" />
                                                    <path
                                                        d="M42.1284 38.4487L37.4995 33.8124L34.0791 37.2402L33.6836 37.6284L32.8706 38.4413L32.8633 38.4487L32.8706 38.456L37.4995 43.0849L42.1284 38.4487Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p
                                            class="text-center pt-[22px] text-[19px] leading-[22px] font-semibold dark:text-gray-100">
                                            سایت
                                            <span class="text-blue-500">ارز دیجیتال</span> بایننس
                                        </p>
                                    </div>
                                    <div class="w-full h-full">
                                        <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                            <img
                                                src="../assets/images/patern-footer.png"
                                                class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover"
                                                alt="" />
                                            <div class="flex items-center justify-center pt-5">
                                                <svg
                                                    width="152"
                                                    height="28"
                                                    viewBox="0 0 152 28"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.7"
                                                        d="M15.6413 27.4489H0.0812501V0.648913H15.0813C20.2013 0.648913 23.2812 3.00891 23.2812 7.24891C23.2812 10.4089 21.5213 12.7689 17.4413 13.2489V13.5289C22.0013 14.0489 24.2413 16.5289 24.2413 20.0489C24.2413 24.6489 21.1613 27.4489 15.6413 27.4489ZM4.36125 4.52891V11.8889H14.4813C17.4813 11.8889 19.0013 10.7289 19.0013 8.20891C19.0013 5.68891 17.6013 4.52891 14.6013 4.52891H4.36125ZM4.36125 15.4489V23.5689H15.1613C18.3613 23.5689 19.9213 22.3689 19.9213 19.4489C19.9213 16.6489 18.3213 15.4489 15.1613 15.4489H4.36125ZM31.3591 5.24891H27.0391V0.648913H31.3591V5.24891ZM31.3591 27.4489H27.0391V7.56891H31.3591V27.4489ZM39.6794 27.4489H35.3594V7.56891H39.3194V13.7289H39.5994C40.1994 10.3689 42.8394 7.16891 47.8794 7.16891C53.3994 7.16891 56.1194 10.8889 56.1194 15.4889V27.4489H51.7994V16.6489C51.7994 12.9289 50.1194 11.0489 45.9994 11.0489C41.6394 11.0489 39.6794 13.2889 39.6794 17.6089V27.4489ZM65.8088 27.8489C61.6888 27.8489 59.0888 25.9289 59.0888 22.6489C59.0888 19.5689 61.5688 17.9689 65.4888 17.5289L74.5288 16.5689V15.4089C74.5288 12.1289 73.0888 10.9689 69.2888 10.9689C65.6088 10.9689 63.8088 12.1689 63.8088 15.0889V15.2489H59.5288V15.0889C59.5288 10.5689 63.2888 7.16891 69.6088 7.16891C75.9288 7.16891 78.7688 10.6089 78.7688 15.3689V27.4489H74.8088V22.4889H74.5288C73.4888 25.8489 70.3288 27.8489 65.8088 27.8489ZM63.4088 22.3689C63.4088 23.9689 64.4888 24.7289 66.9688 24.7289C71.4888 24.7289 74.5288 23.0489 74.5288 19.1289L66.7288 20.0089C64.4888 20.2889 63.4088 20.8089 63.4088 22.3689ZM86.945 27.4489H82.625V7.56891H86.585V13.7289H86.865C87.465 10.3689 90.105 7.16891 95.145 7.16891C100.665 7.16891 103.385 10.8889 103.385 15.4889V27.4489H99.065V16.6489C99.065 12.9289 97.385 11.0489 93.265 11.0489C88.905 11.0489 86.945 13.2889 86.945 17.6089V27.4489ZM117.274 27.8489C110.714 27.8489 106.434 23.6489 106.434 17.5289C106.434 11.3289 110.714 7.16891 117.274 7.16891C123.234 7.16891 127.594 10.5289 127.594 15.4889V15.8889H123.314V15.6489C123.314 12.5689 121.074 11.0489 117.194 11.0489C112.714 11.0489 110.714 13.1689 110.714 17.5289C110.714 21.8089 112.714 23.9689 117.194 23.9689C121.074 23.9689 123.314 22.4489 123.314 19.3689V19.0889H127.594V19.5289C127.594 24.4889 123.234 27.8489 117.274 27.8489ZM140.789 27.8489C134.269 27.8489 129.989 24.1689 129.989 17.5289C129.989 11.3289 134.229 7.16891 140.709 7.16891C146.869 7.16891 151.069 10.5689 151.069 16.6089C151.069 17.3289 151.029 17.8889 150.909 18.4889H134.029C134.189 22.3289 136.069 24.3689 140.669 24.3689C144.829 24.3689 146.549 23.0089 146.549 20.6489V20.3289H150.869V20.6889C150.869 24.9289 146.709 27.8489 140.789 27.8489ZM140.629 10.5689C136.229 10.5689 134.309 12.5289 134.069 16.0889H146.989V16.0089C146.989 12.3289 144.869 10.5689 140.629 10.5689Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center pt-[13px]">
                                                <svg
                                                    width="75"
                                                    height="76"
                                                    viewBox="0 0 75 76"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M37.5 75.9487C58.2107 75.9487 75 59.1593 75 38.4487C75 17.738 58.2107 0.948669 37.5 0.948669C16.7893 0.948669 0 17.738 0 38.4487C0 59.1593 16.7893 75.9487 37.5 75.9487Z"
                                                        fill="#F3BA2F" />
                                                    <path
                                                        d="M29.6567 35.226L37.501 27.3818L45.3452 35.2333L49.9082 30.6703L37.501 18.2558L25.0938 30.663L29.6567 35.226Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17.3047 38.445L21.8673 33.8822L26.4301 38.4448L21.8675 43.0076L17.3047 38.445Z"
                                                        fill="white" />
                                                    <path
                                                        d="M29.6523 41.6713L37.4966 49.5156L45.3408 41.664L49.9111 46.227H49.9038L37.4966 58.6415L25.0894 46.2343L25.082 46.227L29.6523 41.6713Z"
                                                        fill="white" />
                                                    <path
                                                        d="M48.5625 38.4528L53.1251 33.89L57.6879 38.4526L53.1253 43.0154L48.5625 38.4528Z"
                                                        fill="white" />
                                                    <path
                                                        d="M42.1284 38.4487L37.4995 33.8124L34.0791 37.2402L33.6836 37.6284L32.8706 38.4413L32.8633 38.4487L32.8706 38.456L37.4995 43.0849L42.1284 38.4487Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p
                                            class="text-center pt-[22px] text-[19px] leading-[22px] font-semibold dark:text-gray-100">
                                            سایت
                                            <span class="text-blue-500">ارز دیجیتال</span> بایننس
                                        </p>
                                    </div>
                                    <div class="w-full h-full">
                                        <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                            <img
                                                src="../assets/images/patern-footer.png"
                                                class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover"
                                                alt="" />
                                            <div class="flex items-center justify-center pt-5">
                                                <svg
                                                    width="152"
                                                    height="28"
                                                    viewBox="0 0 152 28"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.7"
                                                        d="M15.6413 27.4489H0.0812501V0.648913H15.0813C20.2013 0.648913 23.2812 3.00891 23.2812 7.24891C23.2812 10.4089 21.5213 12.7689 17.4413 13.2489V13.5289C22.0013 14.0489 24.2413 16.5289 24.2413 20.0489C24.2413 24.6489 21.1613 27.4489 15.6413 27.4489ZM4.36125 4.52891V11.8889H14.4813C17.4813 11.8889 19.0013 10.7289 19.0013 8.20891C19.0013 5.68891 17.6013 4.52891 14.6013 4.52891H4.36125ZM4.36125 15.4489V23.5689H15.1613C18.3613 23.5689 19.9213 22.3689 19.9213 19.4489C19.9213 16.6489 18.3213 15.4489 15.1613 15.4489H4.36125ZM31.3591 5.24891H27.0391V0.648913H31.3591V5.24891ZM31.3591 27.4489H27.0391V7.56891H31.3591V27.4489ZM39.6794 27.4489H35.3594V7.56891H39.3194V13.7289H39.5994C40.1994 10.3689 42.8394 7.16891 47.8794 7.16891C53.3994 7.16891 56.1194 10.8889 56.1194 15.4889V27.4489H51.7994V16.6489C51.7994 12.9289 50.1194 11.0489 45.9994 11.0489C41.6394 11.0489 39.6794 13.2889 39.6794 17.6089V27.4489ZM65.8088 27.8489C61.6888 27.8489 59.0888 25.9289 59.0888 22.6489C59.0888 19.5689 61.5688 17.9689 65.4888 17.5289L74.5288 16.5689V15.4089C74.5288 12.1289 73.0888 10.9689 69.2888 10.9689C65.6088 10.9689 63.8088 12.1689 63.8088 15.0889V15.2489H59.5288V15.0889C59.5288 10.5689 63.2888 7.16891 69.6088 7.16891C75.9288 7.16891 78.7688 10.6089 78.7688 15.3689V27.4489H74.8088V22.4889H74.5288C73.4888 25.8489 70.3288 27.8489 65.8088 27.8489ZM63.4088 22.3689C63.4088 23.9689 64.4888 24.7289 66.9688 24.7289C71.4888 24.7289 74.5288 23.0489 74.5288 19.1289L66.7288 20.0089C64.4888 20.2889 63.4088 20.8089 63.4088 22.3689ZM86.945 27.4489H82.625V7.56891H86.585V13.7289H86.865C87.465 10.3689 90.105 7.16891 95.145 7.16891C100.665 7.16891 103.385 10.8889 103.385 15.4889V27.4489H99.065V16.6489C99.065 12.9289 97.385 11.0489 93.265 11.0489C88.905 11.0489 86.945 13.2889 86.945 17.6089V27.4489ZM117.274 27.8489C110.714 27.8489 106.434 23.6489 106.434 17.5289C106.434 11.3289 110.714 7.16891 117.274 7.16891C123.234 7.16891 127.594 10.5289 127.594 15.4889V15.8889H123.314V15.6489C123.314 12.5689 121.074 11.0489 117.194 11.0489C112.714 11.0489 110.714 13.1689 110.714 17.5289C110.714 21.8089 112.714 23.9689 117.194 23.9689C121.074 23.9689 123.314 22.4489 123.314 19.3689V19.0889H127.594V19.5289C127.594 24.4889 123.234 27.8489 117.274 27.8489ZM140.789 27.8489C134.269 27.8489 129.989 24.1689 129.989 17.5289C129.989 11.3289 134.229 7.16891 140.709 7.16891C146.869 7.16891 151.069 10.5689 151.069 16.6089C151.069 17.3289 151.029 17.8889 150.909 18.4889H134.029C134.189 22.3289 136.069 24.3689 140.669 24.3689C144.829 24.3689 146.549 23.0089 146.549 20.6489V20.3289H150.869V20.6889C150.869 24.9289 146.709 27.8489 140.789 27.8489ZM140.629 10.5689C136.229 10.5689 134.309 12.5289 134.069 16.0889H146.989V16.0089C146.989 12.3289 144.869 10.5689 140.629 10.5689Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center pt-[13px]">
                                                <svg
                                                    width="75"
                                                    height="76"
                                                    viewBox="0 0 75 76"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M37.5 75.9487C58.2107 75.9487 75 59.1593 75 38.4487C75 17.738 58.2107 0.948669 37.5 0.948669C16.7893 0.948669 0 17.738 0 38.4487C0 59.1593 16.7893 75.9487 37.5 75.9487Z"
                                                        fill="#F3BA2F" />
                                                    <path
                                                        d="M29.6567 35.226L37.501 27.3818L45.3452 35.2333L49.9082 30.6703L37.501 18.2558L25.0938 30.663L29.6567 35.226Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17.3047 38.445L21.8673 33.8822L26.4301 38.4448L21.8675 43.0076L17.3047 38.445Z"
                                                        fill="white" />
                                                    <path
                                                        d="M29.6523 41.6713L37.4966 49.5156L45.3408 41.664L49.9111 46.227H49.9038L37.4966 58.6415L25.0894 46.2343L25.082 46.227L29.6523 41.6713Z"
                                                        fill="white" />
                                                    <path
                                                        d="M48.5625 38.4528L53.1251 33.89L57.6879 38.4526L53.1253 43.0154L48.5625 38.4528Z"
                                                        fill="white" />
                                                    <path
                                                        d="M42.1284 38.4487L37.4995 33.8124L34.0791 37.2402L33.6836 37.6284L32.8706 38.4413L32.8633 38.4487L32.8706 38.456L37.4995 43.0849L42.1284 38.4487Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p
                                            class="text-center pt-[22px] text-[19px] leading-[22px] font-semibold dark:text-gray-100">
                                            سایت
                                            <span class="text-blue-500">ارز دیجیتال</span> بایننس
                                        </p>
                                    </div>
                                    <div class="w-full h-full">
                                        <div class="bg-blue-6 w-full h-[199px] rounded-md relative">
                                            <img
                                                src="../assets/images/patern-footer.png"
                                                class="w-full h-full absolute left-0 top-0 opacity-[0.10] object-cover"
                                                alt="" />
                                            <div class="flex items-center justify-center pt-5">
                                                <svg
                                                    width="152"
                                                    height="28"
                                                    viewBox="0 0 152 28"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.7"
                                                        d="M15.6413 27.4489H0.0812501V0.648913H15.0813C20.2013 0.648913 23.2812 3.00891 23.2812 7.24891C23.2812 10.4089 21.5213 12.7689 17.4413 13.2489V13.5289C22.0013 14.0489 24.2413 16.5289 24.2413 20.0489C24.2413 24.6489 21.1613 27.4489 15.6413 27.4489ZM4.36125 4.52891V11.8889H14.4813C17.4813 11.8889 19.0013 10.7289 19.0013 8.20891C19.0013 5.68891 17.6013 4.52891 14.6013 4.52891H4.36125ZM4.36125 15.4489V23.5689H15.1613C18.3613 23.5689 19.9213 22.3689 19.9213 19.4489C19.9213 16.6489 18.3213 15.4489 15.1613 15.4489H4.36125ZM31.3591 5.24891H27.0391V0.648913H31.3591V5.24891ZM31.3591 27.4489H27.0391V7.56891H31.3591V27.4489ZM39.6794 27.4489H35.3594V7.56891H39.3194V13.7289H39.5994C40.1994 10.3689 42.8394 7.16891 47.8794 7.16891C53.3994 7.16891 56.1194 10.8889 56.1194 15.4889V27.4489H51.7994V16.6489C51.7994 12.9289 50.1194 11.0489 45.9994 11.0489C41.6394 11.0489 39.6794 13.2889 39.6794 17.6089V27.4489ZM65.8088 27.8489C61.6888 27.8489 59.0888 25.9289 59.0888 22.6489C59.0888 19.5689 61.5688 17.9689 65.4888 17.5289L74.5288 16.5689V15.4089C74.5288 12.1289 73.0888 10.9689 69.2888 10.9689C65.6088 10.9689 63.8088 12.1689 63.8088 15.0889V15.2489H59.5288V15.0889C59.5288 10.5689 63.2888 7.16891 69.6088 7.16891C75.9288 7.16891 78.7688 10.6089 78.7688 15.3689V27.4489H74.8088V22.4889H74.5288C73.4888 25.8489 70.3288 27.8489 65.8088 27.8489ZM63.4088 22.3689C63.4088 23.9689 64.4888 24.7289 66.9688 24.7289C71.4888 24.7289 74.5288 23.0489 74.5288 19.1289L66.7288 20.0089C64.4888 20.2889 63.4088 20.8089 63.4088 22.3689ZM86.945 27.4489H82.625V7.56891H86.585V13.7289H86.865C87.465 10.3689 90.105 7.16891 95.145 7.16891C100.665 7.16891 103.385 10.8889 103.385 15.4889V27.4489H99.065V16.6489C99.065 12.9289 97.385 11.0489 93.265 11.0489C88.905 11.0489 86.945 13.2889 86.945 17.6089V27.4489ZM117.274 27.8489C110.714 27.8489 106.434 23.6489 106.434 17.5289C106.434 11.3289 110.714 7.16891 117.274 7.16891C123.234 7.16891 127.594 10.5289 127.594 15.4889V15.8889H123.314V15.6489C123.314 12.5689 121.074 11.0489 117.194 11.0489C112.714 11.0489 110.714 13.1689 110.714 17.5289C110.714 21.8089 112.714 23.9689 117.194 23.9689C121.074 23.9689 123.314 22.4489 123.314 19.3689V19.0889H127.594V19.5289C127.594 24.4889 123.234 27.8489 117.274 27.8489ZM140.789 27.8489C134.269 27.8489 129.989 24.1689 129.989 17.5289C129.989 11.3289 134.229 7.16891 140.709 7.16891C146.869 7.16891 151.069 10.5689 151.069 16.6089C151.069 17.3289 151.029 17.8889 150.909 18.4889H134.029C134.189 22.3289 136.069 24.3689 140.669 24.3689C144.829 24.3689 146.549 23.0089 146.549 20.6489V20.3289H150.869V20.6889C150.869 24.9289 146.709 27.8489 140.789 27.8489ZM140.629 10.5689C136.229 10.5689 134.309 12.5289 134.069 16.0889H146.989V16.0089C146.989 12.3289 144.869 10.5689 140.629 10.5689Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center pt-[13px]">
                                                <svg
                                                    width="75"
                                                    height="76"
                                                    viewBox="0 0 75 76"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M37.5 75.9487C58.2107 75.9487 75 59.1593 75 38.4487C75 17.738 58.2107 0.948669 37.5 0.948669C16.7893 0.948669 0 17.738 0 38.4487C0 59.1593 16.7893 75.9487 37.5 75.9487Z"
                                                        fill="#F3BA2F" />
                                                    <path
                                                        d="M29.6567 35.226L37.501 27.3818L45.3452 35.2333L49.9082 30.6703L37.501 18.2558L25.0938 30.663L29.6567 35.226Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17.3047 38.445L21.8673 33.8822L26.4301 38.4448L21.8675 43.0076L17.3047 38.445Z"
                                                        fill="white" />
                                                    <path
                                                        d="M29.6523 41.6713L37.4966 49.5156L45.3408 41.664L49.9111 46.227H49.9038L37.4966 58.6415L25.0894 46.2343L25.082 46.227L29.6523 41.6713Z"
                                                        fill="white" />
                                                    <path
                                                        d="M48.5625 38.4528L53.1251 33.89L57.6879 38.4526L53.1253 43.0154L48.5625 38.4528Z"
                                                        fill="white" />
                                                    <path
                                                        d="M42.1284 38.4487L37.4995 33.8124L34.0791 37.2402L33.6836 37.6284L32.8706 38.4413L32.8633 38.4487L32.8706 38.456L37.4995 43.0849L42.1284 38.4487Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p
                                            class="text-center pt-[22px] text-[19px] leading-[22px] font-semibold dark:text-gray-100">
                                            سایت
                                            <span class="text-blue-500">ارز دیجیتال</span> بایننس
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section> -->
                <!-- International payment End -->
            <?php
            endif;
            ?>
        </div>
    </section>


    <?php
    get_footer();
