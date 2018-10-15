<?php

namespace UVigoThemeWPApp;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    return array_filter($classes);
});
