<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Models\Season;

class ProductController extends Controller
{
   public function index()
   {
    $products = Product::select('name', 'price', 'image')
    ->latest()
    ->paginate(6);
    return view('index', compact('products'));
   }

   public function store(ProductRequest $request)
   {
      $product = $request->only(['name', 'price', 'image', 'description']);
      Product::create($product);
   }

   public function storeSeason (ProductRequest $request)
   {
      $season = $request->only(['season']);
      Season::create($season);
   }

   public function showRegistrationForm()
   {
       return view('register');
   }
     

}
