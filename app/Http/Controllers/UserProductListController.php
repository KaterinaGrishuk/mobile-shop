<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserProductListController extends Controller
{
    public function index($id){
        $user = Auth::user();

        if($user->id !== (int)($id)){
            return view('no-access-page');
        }

        $products = Product::where('user_id', $id)->latest()->get();

        return view('user-product-list')->with(['products' => $products,'title' => 'Мои товары']);
    }

    public function viewSaleProducts($id){
        $user = Auth::user();

        if($user->id !== (int)($id)){
            return view('no-access-page');
        }

        $sub = Transaction::orderBy('time_created','DESC');
        $transactions = DB::table(DB::raw("({$sub->toSql()}) as sub"))
            ->leftJoin('users', 'sub.buyer_id', '=', 'users.id')
            ->leftJoin('products', 'sub.product_id', '=', 'products.id')
            ->select('*', DB::raw('count(*) as total'))
            ->where('seller_id', $id)
            ->groupBy('product_id')
            ->orderBy('time_created','DESC')
            ->get();
//        $transactions = Transaction::select("*", DB::raw('count(*) as total'))->orderBy('created_at','desc')->groupBy('product_id')->with('user_b')->get();

        return view('user-sale-products')->with(['transactions'=>$transactions, 'title'=>'Список проданных товаров']);
    }

    public function viewBuyProducts($id){
        $user = Auth::user();

        if($user->id !== (int)($id)){
            return view('no-access-page');
        }

        $sub = Transaction::orderBy('time_created','DESC');
        $transactions = DB::table(DB::raw("({$sub->toSql()}) as sub"))
            ->leftJoin('users', 'sub.seller_id', '=', 'users.id')
            ->leftJoin('products', 'sub.product_id', '=', 'products.id')
            ->select('*', DB::raw('count(*) as total'))
            ->where('buyer_id', $id)
            ->groupBy('product_id')
            ->orderBy('time_created','DESC')
            ->get();

        return view('user-buy-products')->with(['transactions'=>$transactions, 'title'=>'Список купленных товаров']);
    }
}
