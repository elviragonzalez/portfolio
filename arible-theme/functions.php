<?php
function style() {
    wp_enqueue_style("theme-style", get_template_directory_uri(). "/style.css");
}
add_action("wp_enqueue_scripts", "style");

function portfolio_remove_gutenberg() 
{
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action('init', 'portfolio_remove_gutenberg');