<?php

use Illuminate\Http\Request;

Route::post('carts/{cart_id}/items', 'CartController@addItemIntoCart');
