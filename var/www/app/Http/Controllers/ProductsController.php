<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
   public function index()
   {
       $products = cache()->remember('homepage', 10, function()
       {
		return Product::all();
       });

       return view('products', compact('products'));
   }
   public function create()
   {
   		return view('create');
   }
   public function store(Request $request)
   {
   		$product = new Product;
   		$product->name = $request->get('name');
   		$product->description = $request->get('description');
   		$product->photo = $request->get('photo');
   		$product->price = $request->get('price');

   		$product->save();

   		return redirect()->route('index');
  	}
  	public function destroy($id)
  	{
  		Product::find($id)->delete();
  		return redirect()->route('index');
  	}
}
