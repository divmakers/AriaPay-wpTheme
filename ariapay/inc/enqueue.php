<?php
wp_dequeue_style('wp-block-library');
wp_dequeue_style('wc-blocks-style');
wp_dequeue_style( 'global-styles' );
wp_dequeue_style( 'ez-icomoon' );
wp_dequeue_style( 'ez-toc' );
wp_dequeue_style( 'classic-theme-styles' );




add_action('wp_enqueue_scripts', 'rt_enqueue_scripts');
function rt_enqueue_scripts()
{


  // Custom Styles / Scripts per pages
    // Home Style
    // if( is_page_template('page-templates/contact.php') || is_page_template('page-templates/front.php') ){
        wp_enqueue_style('homeStyle', RTARIA_CSS  . '/home.css', null, '1.0.0');
    // }
    // Add Main Styles
        wp_enqueue_style('MainStyle', RTARIA_CSS  . '/output.css', null, '1.0.0');
        wp_enqueue_style('AddedStyle', RTARIA_CSS  . '/added.css', null, '1.0.0');


    if( is_page_template('page-contact.php') ){
        wp_enqueue_style('leafletStyle', RTARIA_CSS  . '/leaflet.css', null, '1.0.0');
    }
    if( is_page_template('page-faq.php') ){
        wp_enqueue_style('faqStyle', RTARIA_CSS  . '/faq.css', null, '1.0.0');
        wp_enqueue_script('faq-script', RTARIA_JS . '/faq.js', ['Jquery'], '1.0.0', true);
    }

    if( is_page_template('page-blog.php') ){
        wp_enqueue_style('blogStyle', RTARIA_CSS  . '/weblog.css', null, '1.0.0');
        wp_enqueue_script('weBlogJS', RTARIA_JS . '/weblog.js', ['swiperJS', 'Jquery'], '1.0.0', true);
        $rt_body_classes[] = 'bg-white-300 dark:bg-blue-800';
    }

    if( is_page_template('page-trainings.php') ){
        wp_enqueue_style('trainingStyle', RTARIA_CSS  . '/main-page-templates/training.css', null, '1.0.0');
        wp_enqueue_script('trainingJS', RTARIA_JS . '/mainPageTraining.js', ['swiperJS', 'Jquery'], '1.0.0', true);
    }

    if( is_page_template('page-news.php') ){
        wp_enqueue_style('newsStyle', RTARIA_CSS  . '/main-news-page.css', null, '1.0.0');
        wp_enqueue_script('newsJS', RTARIA_JS . '/mainPageNews.js', ['swiperJS', 'Jquery'], '1.0.0', true);
    }
    if (is_tax('category-news')){
        wp_enqueue_script('newsJS', RTARIA_JS . '/NewsPageCategories.js', ['swiperJS', 'Jquery'], '1.0.0', true);
    }
    if (is_singular('news')){
        wp_enqueue_script('newsJS', RTARIA_JS . '/newsSingle.js', ['swiperJS', 'Jquery'], '1.0.0', true);
    }
    if (is_singular('trainings')){
        wp_enqueue_script('trainingJS', RTARIA_JS . '/singleEducation.js', ['swiperJS', 'Jquery'], '1.0.0', true);
    }


    if (is_tax('category-trainings')){

    }

    // Services Pages
    // $services_templatePages = [
    //     'page-templates/services.php',
    //     'page-templates/apple-id.php',
    //     'page-templates/ip-sabet.php',
    //     'page-templates/lottery.php',
    //     'page-templates/telegram.php',
    //     'page-templates/binance.php',
    // ];
    $services_templatePages = [
        'page-services.php',
        'page-apple-id.php',
        'page-ip-sabet.php',
        'page-lottery.php',
        'page-telegram.php',
        'page-binance.php',
    ];
    foreach ($services_templatePages as $service) {
        if( is_page_template($service) ){
            wp_enqueue_style('services-style', RTARIA_CSS  . '/services.css', null, '1.0.0');
            wp_enqueue_script('waveSurferJS', RTARIA_JS . '/wavesurfer.min.js', null, '1.0.0', true);
            wp_enqueue_script('services-script', RTARIA_JS . '/services.js', ['Jquery','swiperJS'], '1.0.0', true);
        }
    }

    // Search Page
    if( is_page_template('search.php') || is_search() ){
        wp_enqueue_script('services-script', RTARIA_JS . '/searchResult.js', null, '1.0.0', true);
    }

    wp_enqueue_style('FontStyle', RTARIA_FONTS . '/peyda/fontiran.css', null, '1.0.0');
    wp_enqueue_style('ClasStyle', RTARIA_FONTS  . '/clash/clash-display.css', null, '11.1.9');
    wp_enqueue_style('SwipStyle', RTARIA_CSS  . '/swiper-bundle.min.css', null, '3.0.1');

    // Add Main Scripts
    wp_enqueue_script('Jquery', RTARIA_JS . '/jquery.min.js', null, '3.5.1', true);
    wp_enqueue_script('swiperJS', RTARIA_JS . '/swiper-bundle.min.js', null, '11.1.9', true);
    // wp_enqueue_script('apexchart', RTARIA_JS . '/apexcharts.js', null, '3.52.0', true);
    wp_enqueue_script('mainJs', RTARIA_JS . '/index.js', null, '1.0.0', true);
    wp_enqueue_script('homeJs', RTARIA_JS . '/home.js', null, '1.0.0', true);
    wp_enqueue_script('added', RTARIA_JS . '/added.js', null, '1.0.0', true);
    $ajaxed_data = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('submit_comment_nonce')
    );
    wp_localize_script('added', 'wpAjax', $ajaxed_data);
    

    // Setup Localizd Data For use in js
    wp_localize_script('mainJs', 'localdata', [
        'assetsurl' => get_template_directory_uri() . '/assets',
        'nonce'     => wp_create_nonce('rt_ariapay'),
        'ajax_url'  => admin_url('admin-ajax.php'),
        'user_id'   => get_current_user_id(),
    ]);
}



// Adding Custom Body Classes to WP body

function aria_customBodyClasses($rt_body_classes) {
    $rt_body_classes[] = 'bg-white-300 dark:bg-blue-800';
    return $rt_body_classes;
}

add_filter('body_class', 'aria_customBodyClasses');

