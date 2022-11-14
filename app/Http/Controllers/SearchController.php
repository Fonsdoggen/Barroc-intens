<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{
    public function filterOpdracht() {
        $id = request()->get('category');
        if ($id == 99){
            $products = Product::all();
            return view('/home')->with(['products' => $products]);
        }
        else{
            $products = Product::where('stock_status', $id)->get();
            return view('/home')->with(['products' => $products]);
        }
    }
}
