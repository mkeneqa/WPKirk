<?php

namespace WPKirk\Http\Controllers;

class ExampleModelController extends Controller
{
    public function index()
    {
        return WPKirk()
            ->view('dashboard.model')
            ->withAdminStyles('wp-kirk-common');
    }
}
