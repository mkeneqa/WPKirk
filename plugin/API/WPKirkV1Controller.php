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

    public function multiple()
    {
        return $this->response(['multiple' => '1.0.0']);
    }

    public function error()
    {
        logger()->debug("REQUEST get_method", ($this->request->get_method()));
        logger()->debug("REQUEST get_headers", ($this->request->get_headers()));
        logger()->debug("REQUEST get_query_params", ($this->request->get_query_params()));
        logger()->debug("REQUEST get_attributes", ($this->request->get_attributes()));
        logger()->info("REQUEST get_attributes", $this->request->get_attributes());

        return $this->responseError("Oops!", "Something goes wrong >> " . $this->request->get_header('user_agent'));
    }

    public function controller_args(\WP_REST_Request $request)
    {
        $value = var_export($request, true);

        return $this->response(
            [
                "request" => $value,
                "ROUTE" => $request->get_route(),
                ]
        );
    }
}
