@extends('layouts.main')
@section('content')
    <div class="edit_product">
        <div class="form_wrap">
            {{ Form::open(['files' => true]) }}
            <span>Название:</span>{{Form::text('name', $oldData['name'])}}<br>
            @if($errors->has('name'))
                <span class="alert alert-danger">{{ $errors->first('name') }}</span><br>
            @endif
            <span>Цена, бел.руб:</span>{{Form::text('price', $oldData['price'])}}<br>
            @if($errors->has('price'))
                <span class="alert alert-danger">{{ $errors->first('price') }}</span><br>
            @endif
            <span>Количество, шт:</span>{{Form::text('amount', $oldData['amount'])}}<br>
            @if($errors->has('amount'))
                <span class="alert alert-danger">{{ $errors->first('amount') }}</span><br>
            @endif
            <span>Описание:</span>{{Form::textarea('description', $oldData['description'])}}<br>
            @if($errors->has('description'))
                <span class="alert alert-danger">{{ $errors->first('description') }}</span><br>
            @endif
{{--            {{Form::hidden('image', $product->image)}}--}}
            <img src="{{$oldData['image']}}" alt="" style="height: 100px;">
            <span>Изменить изображение</span>{{Form::file('image', ['class'=>'edit-product-file'])}} <br>
            @if($errors->has('image'))
                <span class="alert alert-danger">{{ $errors->first('image') }}</span><br>
            @endif
            <button type="submit" class="add pull-right btn">Изменить</button>
            {{ Form::close() }}
            <a href="{{route('user-product-list',['id'=>Auth::user()->id])}}"><button style="margin-right: 5px;" type="button" class="add pull-right btn">Отмена</button></a>

        </div>
    </div>
@endsection