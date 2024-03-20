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
    // LORIS
    $open = fopen("database\csv\categories.csv", "r");
    $contents = file_get_contents($open);
    $rows = explode(PHP_EOL, $contents);


    $row = 1;
    if ($open !== false) {
      while (($data = fgetcsv($open, 1000, ",")) !== false) {
        if ($row !== 1) {
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
