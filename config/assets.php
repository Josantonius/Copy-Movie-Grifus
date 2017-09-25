<?php
/**
 * Copy Movie Grifus · Extensions For Grifus 
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Copy-Movie-Grifus.git
 * @since      1.0.0
 */

use Eliasis\Complement\Type\Module\Module;

$css = Module::CopyMovieGrifus()->get('url', 'css');
$js  = Module::CopyMovieGrifus()->get('url', 'js');

return [

    'assets' => [

        'js' => [
            'copyMovieGrifus' => [
                'name'      => 'copyMovieGrifus',
                'url'       => $js . 'copy-movie-grifus.min.js',
                'place'     => 'front',
                'deps'      => ['jquery'],
                'version'   => '1.0.0',
                'footer'    => true,
                'params'    => [],
            ],
        ],
        'css' => [
            'copyMovieGrifus' => [
                'name'      => 'copyMovieGrifus',
                'url'       => $css . 'copy-movie-grifus.min.css',
                'place'     => 'front',
                'deps'      => [],
                'version'   => '1.0.0',
                'media'     => '',
            ],
        ],
    ],
];
