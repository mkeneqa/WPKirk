<?php

use WPKirk\WPBones\Routing\API\Route;

Route::get('/example', function () {
    return 'Hello World!';
});

Route::get('/tag', function () {
    wp_send_json(["tag" => "v1.0.0"]);
});

Route::get('/invalid', function () {
    return new \WP_Error('no_author', 'Invalid author', array( 'status' => 404 ));
});

Route::get('/version', '\WPKirk\API\WPKirkV1Controller@version');

Route::get('/error', '\WPKirk\API\WPKirkV1Controller@error');

Route::post('/version', '\WPKirk\API\WPKirkV1Controller@version');
