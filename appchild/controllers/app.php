<?php

namespace UVigoThemeWPChildApp;

use Sober\Controller\Controller;

class ChildApp extends Controller
{
    public static function errorLog($log)
    {
        if (is_array($log) || is_object($log)) {
            error_log(print_r($log, true));
        } else {
            error_log($log);
        }
    }
}
