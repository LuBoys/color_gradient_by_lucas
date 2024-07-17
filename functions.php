<?php

function enqueue_gradient_follower_script() {
  wp_enqueue_script(
    'gradient-follower',
    get_template_directory_uri() . '/js/gradient-follow.js',
    array(),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_gradient_follower_script');
?>