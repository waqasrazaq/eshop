<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CartItems
 * @package App
 */
class CartItems extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'quantity'];
}
