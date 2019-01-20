<?php

namespace Tests\Feature;

use Tests\TestCase;

class CartsTest extends TestCase
{
    /**
     * Add an item into cart and then test service is returning the added item in response
     */
    public function testsItemsAreAddedCorrectlyIntoGivenCart()
    {
        $payload = [
            'product_id' => 3,
            'quantity' => 5
        ];

        $this->json('POST', '/api/carts/1/items', $payload)
            ->assertStatus(201)
            ->assertJson(['cart_id' => 1, 'product_id' => 3, 'quantity' => 5]);
    }
}
