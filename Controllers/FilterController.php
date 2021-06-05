<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FilterController
{
    public function filter(Request $request){
        $productsQuery = Product::query();
        if($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        }
        $products = $productsQuery->paginate(9)->withPath("?" . $request->getQueryString());
        return view('index', compact('products'));
    }
}
