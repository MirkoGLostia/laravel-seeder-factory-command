<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  // public function run(Faker $faker)
  // {
  //   $array = [];

  //   while (count($array) < 5) {
  //     $element = rand(1, 100);

  //     if (!in_array($element, $array)) {
  //       $array[] = $element;
  //     }
  //   }

  //   $categories_length = Category::all()->count();

  //   for ($i = 0; $i < 100; $i++) {
  //     $rand = rand(1, $categories_length);

  //     $new_product = new Product();

  //     $new_product->category_id = Category::where('id', $rand)->first()->id;
  //     $new_product->name = $faker->words(2, true);
  //     $new_product->description = $faker->sentence();
  //     $new_product->image = "https://picsum.photos/500";
  //     $new_product["ean-code"] = $faker->bothify('#############');
  //     $new_product->price = $faker->randomFloat(2, 9, 99);

  //     if (in_array($i, $array)) {
  //       $new_product->highlighted = true;
  //     } else {
  //       $new_product->highlighted = false;
  //     }

  //     $new_product->save();
  //   }
  // }
  public function run()
  {
    for ($i = 0; $i < 100; $i++) {
      Product::factory()->create();
    }
    // Product::factory()->count(100)->create();
  }
}
