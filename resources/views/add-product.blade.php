@extends('layouts.main')
@section('content')
<div class="add_content">
    <div class="form_wrap">
        {{ Form::open(['files' => true]) }}
        <span>Название*:</span>{{Form::text('name', old('name'))}}<br>
        @if($errors->has('name'))
            <span class="alert alert-danger">{{ $errors->first('name') }}</span><br>
        @endif
        <span>Цена, бел.руб*:</span>{{Form::text('price', old('price'))}}<br>
        @if($errors->has('price'))
            <span class="alert alert-danger">{{ $errors->first('price') }}</span><br>
        @endif
        <span>Количество, шт*:</span>{{Form::text('amount', old('amount'))}}<br>
        @if($errors->has('amount'))
            <span class="alert alert-danger">{{ $errors->first('amount') }}</span><br>
        @endif
        <span>Описание:</span>{{Form::textarea('description', old('description'))}}<br>
        @if($errors->has('description'))
            <span class="alert alert-danger">{{ $errors->first('description') }}</span><br>
        @endif
        <span>Добавить изображение*</span>{{Form::file('image')}}
        @if($errors->has('image'))
            <span class="alert alert-danger">{{ $errors->first('image') }}</span><br>
        @endif
        <button type="submit" class="add pull-right btn">Добавить</button>
        {{ Form::close() }}
        <a href="{{route('index-home')}}"><button style="margin-right: 5px;" type="button" class="add pull-right btn">Отмена</button></a>

    </div>
</div>
@endsection
@section('css')
    @parent
@endsection