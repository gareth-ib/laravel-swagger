<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 26.08.16
 * Time: 11:49
 */

return [
    'route' => '/',
    'info' => [
        'description' => 'swagger-description', // Name of view
        'version' => '0.0.0',
        'title' => 'Name of Your Application',
        'termsOfService' => '',
        'contact' => [
            'email' => 'your@email.com'
        ],
        'license' => [
            'name' => '',
            'url' => ''
        ]
    ],
    'swagger' => [
        'version' => '2.0'
    ],
    'basePath' => '/',
    'schemes' => [],
    'definitions' => [],
    'security' => '', //possible values : jwt, laravel or null if your project dont need auth
    'defaults' => [
        'code-descriptions' => [
            '200' => 'Operation successfully done',
            '204' => 'Operation successfully done',
            '404' => 'This entity not found'
        ]
    ],
    // you can use your own data collector class, just write it way below,
    // e.g App\Path-to-your-data-collector-class
    'data_collector' => ''
];
