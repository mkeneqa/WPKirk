<?php

use WPKirk\WPBones\Database\Seeder;

class ProdcutSeeder extends Seeder
{
    protected $tablename = 'products';

    // Run the database seeds just once
    protected $runOnce = true;

    public function run()
    {
        $this->insert(
            "(name) VALUES 
            ('iMac'),
            ('iPod'),
            ('iPhone'),
            ('iPad')
            "
        );
    }
}
