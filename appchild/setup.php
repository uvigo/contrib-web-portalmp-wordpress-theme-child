<?php

namespace UVigoThemeWPApp;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    // Uncomment next line to link child Styles
    // wp_enqueue_style('uvigothemewp-child/main.css', asset_path_child('styles/main.css'), false, null);

    // Uncomment next line to link child Javacript
    // wp_enqueue_script('uvigothemewp-child/main.js', asset_path_child('scripts/main.js'), ['jquery'], null, true);
}, 110);

/**
 * Theme Language
 */
add_action('after_setup_theme', function () {
    load_theme_textdomain('uvigothemewp-child', get_theme_file_path() . '/languages');
});

/**
 * Init actions
 */
add_action('init', function () {
    // Init hooks
}, 20);

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Child Sage container
     */
    sage()->singleton('sage.assets_child', function () {
        return new JsonManifest(config_child('assets.manifest'), config_child('assets.uri'));
    });

    /**
     * Create @asset_child() Blade directive
     */
    sage('blade')->compiler()->directive('asset_child', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path_child({$asset}); ?>";
    });
}, 20);
