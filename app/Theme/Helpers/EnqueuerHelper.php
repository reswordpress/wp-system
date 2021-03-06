<?php
/**
 * WP System - EnqueuerHelper - Concrete Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Helpers;

use Roots\Sage\Container;

/*************************************/
/********** ENQEUEUR HELPER **********/
/*************************************/

final class EnqueuerHelper
{
    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    private function __construct()
    {  
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /***********************************/
    /********** ENQUEUE STYLE **********/
    /***********************************/

    /**
     * @param String $handle stylename
     * @param String $src path to file
     * @param Array $deps dependencies
     * @param Mixed $ver version
     * @param String $media targeted media
     */

    public static function enqueueStyle(string $handle, string $src = '', array $deps = [], $ver = false, string $media = 'all')
    {
        add_action('wp_enqueue_scripts', function() use ($handle, $src, $deps, $ver, $media) {
            wp_register_style($handle, $src, $deps, $ver, $media);
            wp_enqueue_style($handle, $src, $deps, $ver, $media);
        });
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /************************************/
    /********** ENQUEUE SCRIPT **********/
    /************************************/

    /**
     * @param String $handle stylename
     * @param String $src path to file
     * @param Array $deps dependencies
     * @param Mixed $ver version
     * @param Bool $inFooter place file footer
     */

    public static function enqueueScript(string $handle, string $src = '', array $deps = [], $ver = false, bool $inFooter = false)
    {
        add_action('wp_enqueue_scripts', function() use ($handle, $src, $deps, $ver, $inFooter) {
            wp_register_script($handle, $src, $deps, $ver, $inFooter);
            wp_enqueue_script($handle, $src, $deps, $ver, $inFooter);
        });
    }
}