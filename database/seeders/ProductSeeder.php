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
            "(user_id,activity) VALUES 
            (1,'refresh'),
            (2,'updated'),
            (3,'running'),
            (4,'consumer')
            "
        );
    }
}
