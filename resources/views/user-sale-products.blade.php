@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="user-sale-buy-products">
            @if(count($transactions) == 0)
                <h4 style="text-align: center;">К сожалению, вы не продали ни одного товара</h4>
            @else
                <table class="table table-bordered table-hover table-condensed">
                    <thead style="text-align: center; background-color: #d4d4d4;">
                    <tr>
                        <td>Название</td>
                        <td>Цена, бел.руб</td>
                        <td>Количество, шт</td>
                        <td>Дата последней продажи</td>
                        <td>Покупатель</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->name}}</td>
                            <td>{{number_format($transaction->price, 2, '.', '')}}</td>
                            <td>{{$transaction->total}}</td>
                            <td>{{date('H:i:s d/m/Y', strtotime($transaction->time_created))}}</td>
                            <td>{{$transaction->user_name}} (email: {{$transaction->email}}, тел.{{$transaction->phone}})</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection