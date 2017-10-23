<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditProductController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $oldData = $product->toArray();
        return view('edit-product')->with(['product'=>$product, 'oldData'=> $oldData, 'title'=>' Редактировать продукт']);
    }

    public function editData(Request $request, $id){
        $product = Product::find($id);
        $data =$request->except(['_token']);
        $validator = Validator::make($data, [
            'name' => 'required|min:3|max:150',
            'price' => 'required|numeric',
            'amount' => 'required|numeric|between:1,100',
            'description' => 'min:3|max:66560',
            'image' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['image'] = $product->image;

        if($request->hasFile('image')){
            $image_file = $request->file('image');
            $pathImg = $image_file->store('mob', 'images');
            $image = Storage::disk('images')->url($pathImg);
            $data['image'] = $image;
        }

        $product->fill($data)->save();
        return redirect()->route('user-product-list',['id'=>$product->user_id])->with(['status'=>'Продукт успешно изменён']);
    }
}
