<?php

use Dalen\Theme;

defined('APP_THEME') || define('APP_THEME', true);
defined('APP_THEME_FILE') || define('APP_THEME_FILE', __FILE__);

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_filter('mezu/autoload/files', function (array $files) {
    return array_merge($files, [
        get_parent_theme_file_path('includes/functions-assets.php'),
        get_parent_theme_file_path('includes/functions-setup.php'),
    ]);
});

/*  -----------------------------------------------------------------------------------------------
    LOREM IPSUM
    Suspendisse sodales ipsum non justo imperdiet cursus.
--------------------------------------------------------------------------------------------------- */

add_action('mezu/bootstrap', function (Theme $theme) {
    // ...
});
