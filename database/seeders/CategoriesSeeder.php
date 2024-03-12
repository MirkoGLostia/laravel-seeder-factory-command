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
    Schema::disableForeignKeyConstraints();

    Category::truncate();

    $csvFile = fopen(base_path("database\csv\categories.csv"), "r");

    $firstline = true;

    while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
      if (!$firstline) {
        Category::create([
          "label" => $data['0'],
          "color" => $data['1']
        ]);
      }

      $firstline = false;
    }

    fclose($csvFile);

    Schema::enableForeignKeyConstraints();
  }
}
