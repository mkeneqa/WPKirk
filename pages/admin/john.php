<?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class CustomJohnController extends Page
{
    public function title()
    {
        return "Hello, John!";
    }
    
    public function render()
    {
        return $this->plugin->view('dashboard.custompage');
    }
}
