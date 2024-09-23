<?php
/*
  Plugin Name: Disable Image Resizing
  Plugin URI:
  Description: disable image resizing.
  Version: 1.0.0
  Author: Osawa Naotaka
  Author URI: https://github.com/osawa-naotaka/disable-image-resizing
  License: MIT
 */

// https://developer.wordpress.org/reference/hooks/intermediate_image_sizes_advanced/
// https://developer.wordpress.org/reference/hooks/big_image_size_threshold/
add_filter('intermediate_image_sizes_advanced', function () { return []; });
add_filter('big_image_size_threshold', '__return_false');
