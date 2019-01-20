<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItems;
use Illuminate\Http\Request;
use Validator;
use Exception;

/**
 * Class CartController
 * @package App\Http\Controllers
 */
class CartController extends Controller
{
    /**
     * Add an item into cart related
     * @param $cart_id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addItemIntoCart(Request $request, $cart_id)
    {

        $validator = Validator::make($request->all(), ['product_id' => 'required', 'quantity' => 'required']);

        if ($validator->fails()) {
            return response()->json("Invalid input to the service", 422);
        }

        try {
            $cart_item = CartItems::create(array(
                'cart_id' => $cart_id,
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity')
            ));
        } catch (Exception $e) {
            return response()->json("Internal server error", 500);
        }

        return response()->json($cart_item, 201);
    }
}
