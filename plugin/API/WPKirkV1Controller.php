<?php

namespace WPKirk\API;

if (! defined('ABSPATH')) {
    exit;
}

use WPKirk\WPBones\Routing\API\RestController;

class WPKirkV1Controller extends RestController
{
    public function version()
    {
        return $this->response(['version' => '1.0.0']);
    }

    public function error()
    {
        return $this->responseError("Oops!", "Something goes wrong  ");
    }
}
