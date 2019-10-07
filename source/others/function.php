<?php

/**
 * Functions
 */


/**
 * Load React JS files
 */
function loadReactJS() {

    $dir = './build/static/';

    // JS Files
    $js_files = scandir($dir . 'js/', 1);

    foreach ($js_files as $file) {
        
        $file_explode = explode(".", $file);

        if ( $file_explode[count($file_explode) - 1] === 'js') {
            
            echo "<script src='/build/static/js/{$file}'></script>";
            
        }

    }

}

/**
 * Load React CSS files
 */
function loadReactCSS() {

    $dir = './build/static/';

    // CSS Files
    $css_files = scandir($dir . 'css/', 1);

    foreach ($css_files as $file) {
        
        $file_explode = explode(".", $file);

        if ( $file_explode[count($file_explode) - 1] === 'css') {
            
            echo "<link href='/build/static/css/{$file}' type='text/css' rel='stylesheet' />";
            
        }

    }

}