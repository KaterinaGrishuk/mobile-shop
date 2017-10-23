<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AddProductController extends Controller
{
    public function index(){
        return view('add-product')->with(['title'=>'Добавить новый товар']);
    }

    public function getData(Request $request){
        $user = Auth::user();
        $data=$request->except(['_token']);
        $validator = Validator::make($data, [
            'name' => 'required|min:3|max:150',
            'price' => 'required|numeric',
            'amount' => 'required|numeric|between:1,100',
            'description' => 'min:3|max:66560',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image_file = $request->file('image');
        $pathImg = $image_file->store('mob', 'images');
        $image = Storage::disk('images')->url($pathImg);
        $data['image'] = $image;
//        $data['user_id']= $user->id;

//        $product = new Product();
//        $product->fill($data)->save();
        $result = $user->product()->create($data);

        if(!$result){
            return redirect('add-product')->with(['status'=>'Произошла ошибка. Продукт не добавлен']);
        }

        return redirect('add-product')->with(['status'=>'Продукт успешно добавлен']);
    }
}
