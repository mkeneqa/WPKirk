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
        'debug' => false,
        'enabled' => true
    ],

    // your custom rest api
    'custom' => [
        'debug' => false,
        'enabled' => true,
    ],

    // authentication
    'auth' => [
        // embed basic authentication handler
        'basic' => true
    ]
]