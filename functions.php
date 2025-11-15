<?php

function adevia_enqueue_welcome_scripts() {
    if (is_page() && get_page_template_slug() === 'page-welcome.php') {
        wp_enqueue_script('adevia-welcome-js', get_template_directory_uri() . '/js/welcome.js', [], null, true);
    }
}
add_action('wp_enqueue_scripts', 'adevia_enqueue_welcome_scripts');


?>