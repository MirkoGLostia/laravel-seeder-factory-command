<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Console\Command;

class UpdateFeatured extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'products:update-featured';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    $productsHigh = Product::where('highlighted', true)->get();

    foreach ($productsHigh as $item) {
      $item->update([
        'highlighted' => false
      ]);
    }

    $productsHigh = Product::inRandomOrder()->take(5)->get();

    foreach ($productsHigh as $item) {
      $item->update([
        'highlighted' => true
      ]);
    }
  }
}
