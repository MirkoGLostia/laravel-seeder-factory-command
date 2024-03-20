<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  public function index()
  {
    $products = Product::where('highlighted', true)->get();

    foreach ($products as $product) {
      $category = Category::where('id', $product->category_id)->first();
    }

    return view('home', compact('products'));
  }
}
