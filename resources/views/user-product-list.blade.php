@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="user-product-list">
        @if(count($products) == 0)
            <h4>К сожалению, вы не добавили ни одного товара</h4>
        @else
            <table class="table table-bordered table-hover table-condensed">
                <thead style="text-align: center; background-color: #d4d4d4;">
                    <tr>
                        <td>Название</td>
                        <td>Количество, шт</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->amount}}</td>
                        <td><a href="{{route('edit-product', ['id'=>$product['id']])}}">Редактировать</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection