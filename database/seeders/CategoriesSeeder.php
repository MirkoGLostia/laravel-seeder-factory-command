<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $row = 1;

    if (($open = fopen("database\csv\categories.csv", "r")) !== false) {
      while (($data = fgetcsv($open, 1000, ",")) !== false) {
        if ($row === 1) {
        } else {
          $new_category = new Category();

          $new_category->label = $data["0"];
          $new_category->color = $data["1"];

          $new_category->save();
        }

        $row++;
      }

      fclose($open);
    }
  }
}
