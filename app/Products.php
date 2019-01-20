<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Products
 * @package App
 */
class Products extends Model
{
    protected $fillable = ['name', 'sku'];
}
