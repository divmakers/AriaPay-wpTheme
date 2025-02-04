<?php



$rt_aria_includes = array(
    '/constants.php',                       // Themes's Constants.
    '/setup.php',                           // Initialize theme default settings.
    '/enqueue.php',                         // Enqueue scripts and styles.
    '/hooks.php',                           // Custom hooks.
    '/helpers.php',                         // Helpers functions.
    '/custom-comments.php',                 // Customised Comments.
    '/acf-settings.php',                    // Adding ACF-OPTIONS From PHP,
    '/search-logic.php',                    // Implement Search Logic and AJAXs
);


// Include files.
foreach ($rt_aria_includes as $file) {
    require_once get_theme_file_path('/inc' . $file);
}