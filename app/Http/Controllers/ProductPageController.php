<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductPageController extends Controller
{
    public function index($id){
        $product = Product::with('user')->where('id',$id)->first();

        return view('product-page')->with(['product' => $product]);
    }

    public function buyProduct(Request $request){
        $user = Auth::user();
        $data = $request->except(['_token']);
        $product = Product::find($data['id']);

        if($user->can('buy', $product)){
            $amount_new = $product->amount - 1;
            $product->amount = $amount_new;
            if($product->amount == 0) $product->status = 0;
            $product->save();
            $transaction = new Transaction();
            $data_transaction = [
                'product_id' => $product->id,
                'seller_id' => $product->user_id,
                'buyer_id' => $user->id,
//                'time_created' => Carbon::now()
            ];

            $transaction->fill($data_transaction)->save();

            return redirect()->route('product-page',['id' => $product->id])->with(['status' => "Вы купили $product->name"]);
        }

        return redirect()->back()->with(['access'=>'Вы не можете купить собственный продукт']);
    }
}
