<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Pagination extends Controller
{

    public function products(){
        $products = Product::paginate(9);
        return view('index', compact('products'));
    }
}

