<?php

namespace UVigoThemeWPApp;

use Roots\Sage\Container;

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config_child($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('configchild');
    }
    if (is_array($key)) {
        return sage('configchild')->set($key);
    }
    return sage('configchild')->get($key, $default);
}

/**
 * @param $asset
 * @return string
 */
function asset_path_child($asset)
{
    return sage('assets_child')->getUri($asset);
}
