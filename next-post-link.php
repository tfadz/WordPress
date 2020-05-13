<?php next_post_link('%link', 'Next'); ?>

// Custom styled next links for single post
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="font-weight-bold"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
