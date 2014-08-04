<?php
/**
 * Clean up the_excerpt()
 */
function ucmaster_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'ucmaster') . '</a>';
}
add_filter('excerpt_more', 'ucmaster_excerpt_more');

/**
 * Manage output of wp_title()
 */
function ucmaster_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'ucmaster_wp_title', 10);
