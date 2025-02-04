<?php

/**
 * Comment template
 */
function rt_aria_comment($comment, $args, $depth)
{
    include(locate_template('template-parts/comment.php', false, false));
}





/*** Comments Handler AJAXified */

// Submit comment via AJAX
add_action('wp_ajax_submit_comment_action', 'handle_submit_comment'); // For logged-in users
add_action('wp_ajax_nopriv_submit_comment_action', 'handle_submit_comment'); // For non-logged-in users

function handle_submit_comment() {
    // Check the nonce for security
    check_ajax_referer('submit_comment_nonce', '_wpnonce');
    $post_id = intval($_POST['post_id']); // Ensure it's an integer
    if (!$post_id || !get_post($post_id)) {
        wp_send_json_error(['error' => 'Invalid post ID.']);
    }
    
    $user_id = sanitize_text_field($_POST['user_id']);
    $name = sanitize_text_field($_POST['user_name'] ?? '');

    if($user_id != get_current_user_id()){
        return;
    }
    if (!$name) {
        $userObj = get_userdata($user_id);
        $name = $userObj->display_name;
    }
    $phone = rt_convertPersianToEnglish(sanitize_text_field($_POST['phone']) ?? '');
    if (preg_match("/^9[0-9]{9}$/", $phone)) {
        // Add a '0' at the start if it doesn't have one
        $phone = '0' . $phone;
    }
    
    // Validate request
    if (!wp_doing_ajax()) {
        wp_send_json_error(['error' => 'درخواست نامعتبر است']);
    }

    if (!is_user_logged_in()) {
        if (empty(trim($name))) {
            wp_send_json_error(['error' => 'نام و نام خانوادگی الزامی میباشد.']);
        } elseif (!isset($_POST['phone']) || empty(trim($_POST['phone']))) {
            wp_send_json_error(['error' => 'شماره تماس معتبر نیست.']);
        } elseif (isset($phone) && (!preg_match("/^0?9[0-9]{9}$/", $phone)) ) {
            wp_send_json_error(['error' => 'شماره تماس معتبر نیست.']);
        }

        // Sanitize user inputs (for non-logged-in users)
        $comment_author = sanitize_text_field($_POST['name']);
        $comment_author_email = sanitize_email($_POST['email']);
        
    } else {
        // Get current user data for logged-in users
        $current_user = wp_get_current_user();
        $comment_author = $current_user->display_name;
        $comment_author_email = $current_user->user_email;
    }
    
    // Validate if user is logged in or not
    

    // Validate the comment text
    if (empty($_POST['comment_text'])) {
        wp_send_json_error(['error' => 'متن نظر نمی‌تواند خالی باشد.']);
    }
    
    // Collect and sanitize the form data
    $comment_data = array(
        'comment_post_ID' => intval($post_id),
        'comment_author' => $comment_author,
        'comment_author_email' => $comment_author_email,
        'comment_content' => sanitize_textarea_field($_POST['comment_text']),
        'user_id' => is_user_logged_in() ? get_current_user_id() : 0, // Use 0 if not logged in
        'comment_approved' => 0 // Set to 0 for moderation, change as needed
    );

    // Insert the comment into the database
    $comment_id = wp_insert_comment($comment_data);

    if ($comment_id) {
        // Respond with success message
        wp_send_json_success(['message' => 'نظر شما با موفقیت ثبت شد و پس از تایید، نمایش داده می‌شود.']);
    } else {
        // Respond with failure message
        wp_send_json_error(['error' => 'خطایی در ثبت نظر رخ داد. لطفا دوباره امتحان کنید.']);
    }

    // Always call wp_die() in AJAX handlers
    wp_die();
}

// Voting functionality for comments
function vote_comment() {
    check_ajax_referer('comment_nonce', 'nonce');

    $comment_id = intval($_POST['comment_id']);
    $vote_type = $_POST['vote_type'] === 'up' ? 'upvote' : 'downvote';
    $user_id = get_current_user_id();

    // Fetch existing votes
    $votes = get_comment_meta($comment_id, $vote_type, true) ?: 0;
    $user_votes = get_comment_meta($comment_id, 'user_votes', true) ?: array();

    // Only allow voting if the user hasn't voted yet
    if (!isset($user_votes[$user_id]) || $user_votes[$user_id] !== $vote_type) {
        $votes++;
        $user_votes[$user_id] = $vote_type;
        update_comment_meta($comment_id, $vote_type, $votes);
        update_comment_meta($comment_id, 'user_votes', $user_votes);
        wp_send_json_success(); // Return success response
    } else {
        wp_send_json_error(); // Return error response
    }
}
add_action('wp_ajax_vote_comment', 'vote_comment');
add_action('wp_ajax_nopriv_vote_comment', 'vote_comment');
