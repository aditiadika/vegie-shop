<?php

use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        $categories = ['Fruit', 'Meat', 'Vegetable', 'Beverage', 'Sauce', 'Food'];

        foreach ($categories as $category){
            $category = \App\Models\Category::create([
                'name' => $category
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->fruitName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(1)->id;
            $product->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->meatName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(2)->id;
            $product->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->vegetableName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(3)->id;
            $product->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->beverageName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(4)->id;
            $product->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->sauceName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(5)->id;
            $product->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->foodName();
            $product->price = rand(10000, 100000);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(6)->id;
            $product->save();
        }

        for ($i = 0; $i < 6; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->fruitName();
            $product->price_before_sale = rand(100000, 200000);
            $product->price = rand(50000, 100000);
            $product->discount = rand(10, 50);
            $product->description = $faker->text;
            $product->weight = '1 KG';
            $product->quantity = '100';
            $product->category_id = \App\Models\Category::find(1)->id;
            $product->is_sale = true;
            $product->save();
        }
    }
}
