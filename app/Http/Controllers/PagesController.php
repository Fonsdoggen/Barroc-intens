<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class PagesController extends Controller
{
    public function home() {
        $products = Product::all();
        return view('home', [
            'products' => $products
        ]);
    }
}
