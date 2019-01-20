<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Products::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few products in our database:
        for ($i = 0; $i < 50; $i++) {
            Products::create([
                'name' => $faker->word,
                'sku' => $faker->randomNumber(7, false),
            ]);
        }
    }
}
