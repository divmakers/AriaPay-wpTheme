<?php

// Update The Exerpt_lenght
function rtaria_excerpt_length($length){
    return 25;
}
add_filter('excerpt_length', 'rtaria_excerpt_length');