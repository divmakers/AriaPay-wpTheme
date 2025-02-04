<?php
add_action('wp_ajax_perform_search', 'handle_search_ajax');
add_action('wp_ajax_nopriv_perform_search', 'handle_search_ajax');

function handle_search_ajax() {
    // Get search query and search type from request
    $query = sanitize_text_field($_POST['query']);
    $search_type = sanitize_text_field($_POST['search_type']);

    // Custom search logic based on the type
    $results = array();

    switch ($search_type) {
        case 'search-searvice':
            // Exception array for pages to exclude
            $excluded_page_ids = array(164, 4002, 197, 4535, 10, 8, 229, 7, 3, 198, 4542, ); // Replace with actual page IDs to exclude

            $args = array(
                'post_type' => 'page',
                'post_status' => 'publish',
                's' => $query,
                'posts_per_page' => 3,
                'post__not_in' => $excluded_page_ids
            );

            $search_query = new WP_Query($args);

            if ($search_query->have_posts()) {
                while ($search_query->have_posts()) {
                    $search_query->the_post();
                    $results[] = array(
                        'title' => get_the_title(),
                        'link' => get_permalink()
                    );
                }
            }
            wp_reset_postdata();
            break;

        case 'search-educational':
            $args = array(
                // 'post_type' => 'trainings',
                'post_type' => 'blog',
                'post_status' => 'publish',
                's' => $query,
                'posts_per_page' => 3
            );

            $search_query = new WP_Query($args);

            if ($search_query->have_posts()) {
                while ($search_query->have_posts()) {
                    $search_query->the_post();
                    $results[] = array(
                        'title' => get_the_title(),
                        'link' => get_permalink()
                    );
                }
            }
            wp_reset_postdata();
            break;

        case 'search-news':
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                's' => $query,
                'posts_per_page' => 3
            );

            $search_query = new WP_Query($args);

            if ($search_query->have_posts()) {
                while ($search_query->have_posts()) {
                    $search_query->the_post();
                    $results[] = array(
                        'title' => get_the_title(),
                        'link' => get_permalink()
                    );
                }
            }
            wp_reset_postdata();
            break;

        default:
            // Handle unknown search type
            $results = array('error' => 'Unknown search type');
            break;
    }

    // Return results as JSON
    wp_send_json($results);
}