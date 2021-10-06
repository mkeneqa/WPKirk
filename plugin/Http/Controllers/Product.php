<?php

namespace WPKirk\Http\Controllers;

use WPKirk\WPBones\Database\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';
}
