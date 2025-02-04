<?php

// Prioritize Pages Slug over Archives
add_action( 'init', 'rt_aria_pagerules', 10 );
function rt_aria_pagerules() {
    global $wp_rewrite;
    $wp_rewrite->use_verbose_page_rules = true;
}

add_filter( 'page_rewrite_rules', 'rt_aria_collect_page_rewrite_rules' );
function rt_aria_collect_page_rewrite_rules( $page_rewrite_rules ) {
    global $rt_aria_page_rewrite_rules;
    $rt_aria_page_rewrite_rules = $page_rewrite_rules;
    return array();
}

add_filter( 'rewrite_rules_array', 'rt_aria_prepend_page_rewrite_rules' );
function rt_aria_prepend_page_rewrite_rules( $rewrite_rules ) {
    global $rt_aria_page_rewrite_rules;
    if ( isset( $rt_aria_page_rewrite_rules ) ) {
        return $rt_aria_page_rewrite_rules + $rewrite_rules;
    }
    return $rewrite_rules;
}

// Optional: Flush rewrite rules on activation
function rt_aria_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'rt_aria_flush_rewrite_rules' );



function rt_convertPersianToEnglish($string) {
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    $num = range(0, 9);
    $convertedPersianNums = str_replace($persian, $num, $string);
    $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);
    return $englishNumbersOnly;
}