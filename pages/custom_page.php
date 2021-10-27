<?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class CustomPage extends Page
{
    public function title()
    {
        return "Hello, Custom Page!";
    }
    
    public function render()
    {
        return $this->plugin
            ->view('dashboard.custom_page')
            ->withAdminStyles('wp-kirk-common');
    }
}
