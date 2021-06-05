<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Search
{
    public function search(Request $request){
            $text = $request->searchText;
            $productsQuery = Product::query();
            $products = $productsQuery->where('name', 'LIKE', "%{$text}%")->orderBy('id')->paginate(9);
            return view('index', compact('products'));
    }
}

