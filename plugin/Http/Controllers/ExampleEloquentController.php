<?php

namespace WPKirk\Http\Controllers;

class ExampleEloquentController extends Controller
{
    public function index()
    {
        return WPKirk()
            ->view('dashboard.eloquent')
            ->withAdminStyles('wp-kirk-common');
    }
}
