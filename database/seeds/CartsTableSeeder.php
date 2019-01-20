<?php

use Illuminate\Database\Seeder;
use App\Carts;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carts::truncate();

        // And now, let's create a few products in our database:
        for ($i = 1; $i < 6; $i++) {
            Carts::create([
                'user_id' => $i
            ]);
        }
    }
}
