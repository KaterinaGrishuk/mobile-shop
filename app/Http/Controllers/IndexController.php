<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){

        $products = Product::where('status', '=', '1')->latest()->with('user');

        if($sort = $request->get('sort')){
            if($sort == 0){
                $products = $products->latest();
            }
            if($sort == 1){
                $products = $products->orderBy('name');
            }
            if($sort == 2){
                $products = $products->orderBy('price', 'desc');
            }
        }
        $products =$products->paginate(12);

        if($request->ajax()){
            return view('product.load-home', compact('products'));
        }

        return view('home.home')->with([
            'products' => $products,
        ]);
    }
}
