@extends('layouts.main')
@section('content')
    <div class="product_wrap">
        <div class="container">
            <div class="col-md-5">
                <div class="product_image">
                    <img src="{{$product->image}}" alt="product_image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="product_info">
                    <div class="p_name">{{$product->name}}</div>
                    <div class="p_uname">Продавец: {{$product->user->user_name}} (e-mail: {{$product->user->email}}, {{$product->user->phone}})</div>
                    <div class="p_description">Описание: <br><span>{{$product->description}}</span></div>
                    <div class="p_amount">Количество: {{$product->amount}} шт</div>
                    <div class="p_price">Цена: <br>{{number_format($product->price, 2, '.', '')}} бел.руб</div>
                    @if(!$product->status == 0)
                        <div class="btn-wrap">
                            {{Form::open()}}
                            {{Form::hidden('id', $product->id)}}
                            <button type="submit" class="buy btn">Купить</button>
                            {{ Form::close() }}
                        </div>
                        @else
                        <div class="alert alert-danger">Этого товара нет в наличии</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection