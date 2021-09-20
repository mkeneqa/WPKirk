<?php

/*
|--------------------------------------------------------------------------
| WordPress REST API configuration
|--------------------------------------------------------------------------
|
| Here is where you can set up the WordPress REST API features.
|
*/

return [

    // embeded wp-json-server
    'wp' => [
        'require_authentication' => false
    ],

    // your custom rest api
    'custom' => [
        'path' => '/api',
        'enabled' => true,
    ],

    // authentication
    'auth' => [
        // embed basic authentication handler
        'basic' => true
    ]
];
