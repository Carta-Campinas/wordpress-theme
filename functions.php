<?php
/**
 * Carta Campinas Wordpress Theme
 * 
 * This file is executed everytime the theme is loaded (always the site
 *  is acessed)
 * PHP VERSION 8
 * 
 * @package CartaCampinas
 * @author  Hackeamos.Org <contato@hackeamos.org>
 * @license GPL-3 https://www.gnu.org/licenses/gpl-3.0.pt-br.html
 * @link    https://github.com/Carta-Campinas/wordpress-theme
 */
namespace HackeamosOrg;

/**
 * Composer Autoload
 */
require implode(
    DIRECTORY_SEPARATOR,
    [
        __DIR__,
        'vendor',
        'autoload.php'
    ]
);

use \HackeamosOrg\HackeamosWP\MediaSizes;


/**
 * Set site's media sizes
 */
MediaSizes::setMediaSizes(
    [
        'thumbnail' => [
            'size_w' => 300,
            'size_h' => 300,
            'crop' => true
        ],
        'medium' => [
            'size_w' => 540,
            'size_h' => 540,
            'crop' => true
        ],
        'medium_large' => [
            'size_w' => 720,
            'size_h' => 540,
            'crop' => true
        ],
        'medium_vertical' => [
            'size_w' => 720,
            'size_h' => 540,
            'crop' => true
        ],
        'large' => [
            'size_w' => 1280,
            'size_h' => 720,
            'crop' => true
        ],
        'post-thumbnail' => [
            # null sizes avoid actually changing size, but this will add support to featured-images
            'size_w' => null,
            'size_h' => null
        ]
    ]
);