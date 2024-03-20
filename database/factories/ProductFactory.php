<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
  public  $i;
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    $categories_length = Category::all()->count();

    return [
      'name' => fake()->name(),
      'category_id' => rand(1, $categories_length),
      'description' => fake()->text(),
      'image' => 'https://picsum.photos/500',
      'ean-code' => fake()->bothify('#############'),
      'price' => fake()->randomFloat(2, 9, 99),
      'highlighted' => false,
    ];
  }
}
